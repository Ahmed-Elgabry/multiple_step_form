(function ($) {
    "use strict";

    var $continueBtn = $(".continue");
    var $stepOneErrorMsg = $(".error");
    var $stepOneInputs = $(".step-one input[required], .step-one select[required]");

    function disableContinueBtn() {
        $continueBtn.prop("disabled", true);
    }

    function enableContinueBtn() {
        if ($stepOneInputs.filter(function() { return !this.value; }).length === 0) {
            $continueBtn.prop("disabled", false);
            $stepOneErrorMsg.hide();
        }
    }

    $stepOneErrorMsg.hide();

    $stepOneInputs.on("keyup", function() {
        var $this = $(this);

        if ($this.attr("required") && !$this.val()) {
            disableContinueBtn();
            $this.next(".error").show();
        }
        else {
            enableContinueBtn();
            $this.next(".error").hide();
        }
    });

    // Declare animating variable globally
    var animating;

    $continueBtn.click(function () {
        if ($stepOneInputs.filter(function() { return !this.value; }).length > 0) {
            disableContinueBtn();
            $stepOneErrorMsg.show();
        }
        else {
            enableContinueBtn();
        }
    });

    $continueBtn.click(function () {
        // Check if step one inputs are not empty
        var stepOneInputsFilled = true;
        $('form:first :input[required]').each(function() {
            if ($(this).val() === '') {
                stepOneInputsFilled = false;
                return false;
            }
        });

        if (stepOneInputsFilled) {
            function verificationForm(){
                //jQuery time
                var current_fs, next_fs, previous_fs; //fieldsets
                var left, opacity, scale; //fieldset properties which we will animate
                var animating; //flag to prevent quick multi-click glitches

                $(".next").click(function () {
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    //activate next step on progressbar using the index of next_fs
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0.2;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50) + "%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'transform': 'scale(' + scale + ')',
                                'position': 'absolute'
                            });
                            next_fs.css({
                                'left': left,
                                'opacity': opacity
                            });
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });

                $(".previous").click(function () {
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    //de-activate current step on progressbar
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                    //show the previous fieldset
                    previous_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale previous_fs from 80% to 100%
                            scale = 0.8 + (1 - now) * 0.2;
                            //2. take current_fs to the right(50%) - from 0%
                            left = ((1 - now) * 50) + "%";
                            //3. increase opacity of previous_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'left': left
                            });
                            previous_fs.css({
                                'transform': 'scale(' + scale + ')',
                                'opacity': opacity
                            });
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });

                $(".submit").click(function () {
                    return false;
                })
            }
            verificationForm();

        }
    })


    $(".continue").click(function () {
        if (
            $("select[name=type]").val() === "منزلي" ||
            $("select[name=type]").val() === "الكل"
        ) {
            $("#step-two").show();
        } else {
            $("#step-two").hide();
        }
    });

    $(".btn-step-two").click(function (event) {
        $("#myModal1").modal("show");
    });
    $(".submit").click(function (event) {
        $("#myModal").modal("show");
    });


    function nice_Select() {
        if ($(".product_select").length) {
            $(".product_select").niceSelect();
        }
    }
    nice_Select();
})(jQuery);


// (function ($) {
//     "use strict";

//     //* Form js
//     function verificationForm() {
//         //jQuery time
//         var current_fs, next_fs, previous_fs; //fieldsets
//         var left, opacity, scale; //fieldset properties which we will animate
//         var animating; //flag to prevent quick multi-click glitches

//         $(".next").click(function () {
//             if (animating) return false;
//             animating = true;

//             current_fs = $(this).parent();
//             next_fs = $(this).parent().next();

//             //activate next step on progressbar using the index of next_fs
//             $("#progressbar li")
//                 .eq($("fieldset").index(next_fs))
//                 .addClass("active");

//             //show the next fieldset
//             next_fs.show();
//             //hide the current fieldset with style
//             current_fs.animate(
//                 {
//                     opacity: 0,
//                 },
//                 {
//                     step: function (now, mx) {
//                         //as the opacity of current_fs reduces to 0 - stored in "now"
//                         //1. scale current_fs down to 80%
//                         scale = 1 - (1 - now) * 0.2;
//                         //2. bring next_fs from the right(50%)
//                         left = now * 50 + "%";
//                         //3. increase opacity of next_fs to 1 as it moves in
//                         opacity = 1 - now;
//                         current_fs.css({
//                             transform: "scale(" + scale + ")",
//                             position: "absolute",
//                         });
//                         next_fs.css({
//                             left: left,
//                             opacity: opacity,
//                         });
//                     },
//                     duration: 800,
//                     complete: function () {
//                         current_fs.hide();
//                         animating = false;
//                     },
//                     //this comes from the custom easing plugin
//                     easing: "easeInOutBack",
//                 }
//             );
//         });

//         $(".continue").click(function () {
//             if (
//                 $("select[name=type]").val() === "منزلي" ||
//                 $("select[name=type]").val() === "الكل"
//             ) {
//                 $("#step-two").show();
//             } else {
//                 $("#step-two").hide();
//             }
//         });

// // Continue button
// var $continueBtn = $(".continue");
// // Input fields on step one
// var $stepOneInputs = $(".step-one :input[required]");
// // Error message element on step one
// var $stepOneErrorMsg = $(".error");

// // Hide the error message on step one
// $stepOneErrorMsg.hide();

// // Handle input validation on keyup on step one
// $stepOneInputs.keyup(function () {
//     enableContinueBtn();
// });

// // Handle input validation on "Continue" button click on step one
// $continueBtn.click(function () {
//     if ($stepOneInputs.filter(function() { return !this.value; }).length > 0) {
//         disableContinueBtn();
//         $stepOneErrorMsg.show();
//     }
//     else {
//         enableContinueBtn();
//     }
// });

// // Handle input validation on page load on step one
// if ($stepOneInputs.filter(function() { return !this.value; }).length > 0) {
//     disableContinueBtn();
// }

// // Disable the "Continue" button and show the error message on step one if any required input field is empty
// function disableContinueBtn() {
//     $continueBtn.prop("disabled", true);
// }

// // Enable the "Continue" button on step one if all required input fields are filled out
// function enableContinueBtn() {
//     if ($stepOneInputs.filter(function() { return !this.value; }).length === 0) {
//         $continueBtn.prop("disabled", false);
//         $stepOneErrorMsg.hide();
//     }
// }





//         $(".btn-step-two").click(function (event) {
//             $("#myModal1").modal("show");
//         });
//         $(".submit").click(function (event) {
//             $("#myModal").modal("show");
//         });
//     }


//     //* Select js
//     function nice_Select() {
//         if ($(".product_select").length) {
//             // check for the select element with ID "mySelect"
//             $(".product_select").niceSelect(); // apply niceSelect only to the select element with ID "mySelect"
//         }
//     }
//     /*Function Calls*/
//     verificationForm();
//     nice_Select();
// })(jQuery);




var selectedOptions = [];
function selectOption(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    if (option.classList.contains("selected")) {
        option.classList.remove("selected");
        selectedOptions.splice(
            selectedOptions.indexOf(option.dataset.value),
            1
        );
    } else {
        var selected = option.dataset.value;
        option.classList.add("selected");
        selectedOptions.push(selected);
    }
    console.log(selectedOptions);
}

var selectedOptionsCenterr = [];
function selectedOptionsCenter(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    if (option.classList.contains("selected")) {
        option.classList.remove("selected");
        const selected = option.dataset.value;
        const index = selectedOptionsCenterr.indexOf(selected);
        if (index > -1) {
            selectedOptionsCenterr.splice(index, 1);
        }
    } else {
        const selected = option.dataset.value;
        option.classList.add("selected");
        selectedOptionsCenterr.push(selected);
    }
    console.log(selectedOptionsCenterr);
}

var selectedfree = [];
function selectedfreServ(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    if (option.classList.contains("selected")) {
        option.classList.remove("selected");
        const selected = option.dataset.value;
        const index = selectedfree.indexOf(selected);
        if (index > -1) {
            selectedfree.splice(index, 1);
        }
    } else {
        const selected = option.dataset.value;
        option.classList.add("selected");
        selectedfree.push(selected);
    }
    console.log(selectedfree);
}

var freeServeStepTwo = [];
function freeServtwo(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    if (option.classList.contains("selected")) {
        option.classList.remove("selected");
        const selected = option.dataset.value;
        const index = freeServeStepTwo.indexOf(selected);
        if (index > -1) {
            freeServeStepTwo.splice(index, 1);
        }
    } else {
        const selected = option.dataset.value;
        option.classList.add("selected");
        freeServeStepTwo.push(selected);
    }
    console.log(freeServeStepTwo);
}

var servicepricece = [];
function servicePriceCenter(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    var selectedValue = option
        .querySelector(".parent-circle")
        .getAttribute("data-value");
    const input = option.querySelector("input.price-input");
    const price = input.value;
    if (option.classList.contains("selected")) {
        if (price === "") {
            var index = servicepricece.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                servicepricece.splice(index, 1);
            }
            option.classList.remove("selected");
        } else {
            var index = servicepricece.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                servicepricece[index].price = price;
            }
        }
    } else {
        if (price === "") {
            var index = servicepricece.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                servicepricece.splice(index, 1);
            }
        } else {
            servicepricece.push({ time: selectedValue, price: price });
            option.classList.add("selected");
        }
    }

    console.log(servicepricece);
}

var paidServeStepTwo = [];
function paidServtwo(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    var selectedValue = option
        .querySelector(".parent-circle")
        .getAttribute("data-value");
    const input = option.querySelector("input.price-input");
    const price = input.value;
    if (option.classList.contains("selected")) {
        if (price === "") {
            var index = paidServeStepTwo.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                paidServeStepTwo.splice(index, 1);
            }
            option.classList.remove("selected");
        } else {
            var index = paidServeStepTwo.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                paidServeStepTwo[index].price = price;
            }
        }
    } else {
        if (price === "") {
            var index = paidServeStepTwo.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                paidServeStepTwo.splice(index, 1);
            }
        } else {
            paidServeStepTwo.push({ time: selectedValue, price: price });
            option.classList.add("selected");
        }
    }

    console.log(paidServeStepTwo);
}

var timeSelected = [];
function time(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    var selectedValue = option
        .querySelector(".parent-circle")
        .getAttribute("data-value");
    const input = option.querySelector("input.price-input");
    const price = input.value;

    if (option.classList.contains("selected")) {
        if (price === "") {
            var index = timeSelected.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                timeSelected.splice(index, 1);
            }
            option.classList.remove("selected");
        } else {
            var index = timeSelected.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                timeSelected[index].price = price;
            } else {
                timeSelected.push({ time: selectedValue, price: price });
            }
        }
    } else {
        if (price === "") {
            var index = timeSelected.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                timeSelected.splice(index, 1);
            }
        } else {
            timeSelected.push({ time: selectedValue, price: price });
            option.classList.add("selected");
        }
    }

    console.log(timeSelected);
}

var days = [];
function dayCenter(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    var selectedValue = option
        .querySelector(".parent-circle")
        .getAttribute("data-value");
    var from = option.querySelector("select[name='from-time']");
    var to = option.querySelector("select[name='to-time']");
    var valf = from.value;
    var valt = to.value;

    var existingItemIndex = days.findIndex(
        (item) => item.time === selectedValue
    );
    if (existingItemIndex > -1) {
        var existingItem = days[existingItemIndex];
        if (valf == "" && valf !== existingItem.from) {
            existingItem.from = valf;
        }
        if (valt == "" && valt !== existingItem.to) {
            existingItem.to = valt;
        }
        if (existingItem.from && existingItem.to) {
            option.classList.add("selected");
        } else {
            option.classList.remove("selected");
            days.splice(existingItemIndex, 1);
        }
    } else {
        if (valf == "" && valt == "") {
            days.push({ time: selectedValue, from: valf, to: valt });
            option.classList.remove("selected");
        } else {
            days.push({ time: selectedValue, from: valf, to: valt });
            option.classList.add("selected");
        }
    }
    console.log(days);
}

var service = [];
function serviceper(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    if (option.classList.contains("selected")) {
        option.classList.remove("selected");
        const selected = option.dataset.value;
        const index = service.indexOf(selected);
        if (index > -1) {
            service.splice(index, 1);
        }
    } else {
        const selected = option.dataset.value;
        option.classList.add("selected");
        service.push(selected);
    }
    console.log(service);
}

var dayswork = [];
function dayworks(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    var selectedValue = option
        .querySelector(".parent-circle")
        .getAttribute("data-value");
    const input = option.querySelector("input.price-input");
    const price = input.value;

    if (option.classList.contains("selected")) {
        if (price === "") {
            var index = dayswork.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                dayswork.splice(index, 1);
            }
            option.classList.remove("selected");
        } else {
            var index = dayswork.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                dayswork[index].price = price;
            } else {
                dayswork.push({ time: selectedValue, price: price });
            }
        }
    } else {
        if (price === "") {
            var index = dayswork.findIndex(
                (item) => item.time === selectedValue
            );
            if (index > -1) {
                dayswork.splice(index, 1);
            }
        } else {
            dayswork.push({ time: selectedValue, price: price });
            option.classList.add("selected");
        }
    }

    console.log(dayswork);
}

var service_msg = [];
function service_msggge(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    if (option.classList.contains("selected")) {
        option.classList.remove("selected");
        const selected = option.dataset.value;
        const index = service_msg.indexOf(selected);
        if (index > -1) {
            service_msg.splice(index, 1);
        }
    } else {
        var selected = option.dataset.value;
        option.classList.add("selected");
        service_msg.push(selected);
    }
    console.log(service_msg);
}

var daysswork = [];
function dayworkss(optionNumber) {
    var option =
        document.getElementsByClassName("option-circle")[optionNumber - 1];
    var selectedValue = option
        .querySelector(".parent-circle")
        .getAttribute("data-value");
    var from = option.querySelector("select[name='from-time']");
    var to = option.querySelector("select[name='to-time']");
    var valf = from.value;
    var valt = to.value;

    var existingItemIndex = daysswork.findIndex(
        (item) => item.time === selectedValue
    );
    if (existingItemIndex > -1) {
        var existingItem = daysswork[existingItemIndex];
        if (valf == "" && valf !== existingItem.from) {
            existingItem.from = valf;
        }
        if (valt == "" && valt !== existingItem.to) {
            existingItem.to = valt;
        }
        if (existingItem.from && existingItem.to) {
            option.classList.add("selected");
        } else {
            option.classList.remove("selected");
            daysswork.splice(existingItemIndex, 1);
        }
    } else {
        if (valf == "" && valt == "") {
            daysswork.push({ time: selectedValue, from: valf, to: valt });
            option.classList.remove("selected");
        } else {
            daysswork.push({ time: selectedValue, from: valf, to: valt });
            option.classList.add("selected");
        }
    }
    console.log(daysswork);
}

$(document).ready(function () {
    $(".btn-step-one").click(function (event) {
        event.preventDefault();

        var formData = new FormData();
        formData.append("name_center", $("#name_center").val());
        formData.append("city", $("#city").val());
        formData.append("district", $("#district").val());
        formData.append("location", $("#location").val());
        formData.append("gender", $("#gender").val());
        formData.append("type", $("#type").val());
        formData.append("select", JSON.stringify(selectedOptions));
        formData.append(
            "select_center",
            JSON.stringify(selectedOptionsCenterr)
        );
        formData.append("count_home", $("#count_home").val());
        formData.append("time_center", JSON.stringify(timeSelected));
        formData.append("free_center", JSON.stringify(selectedfree));
        formData.append("price_center", JSON.stringify(servicepricece));
        formData.append("days_center", JSON.stringify(days));
        formData.append("maneger_person", $("#maneger_person").val());
        formData.append("phone_maneger", $("#phone_maneger").val());
        formData.append("email_maneger", $("#email_maneger").val());
        formData.append("phone_work", $("#phone_work").val());
        formData.append("phone_mony", $("#phone_mony").val());
        formData.append("about_center", $("#about_center").val());

        $.ajax({
            url: "/store",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $("#fname").focus();
            },
            error: function (error) {
                console.log(error);
            },
        });
    });

    $(".btn-step-two").click(function (event) {
        event.preventDefault();

        // step two
        var formData2 = new FormData();
        formData2.append("fname", $("#fname").val());
        formData2.append("lname", $("#lname").val());
        formData2.append("nationality", $("#nationality").val());
        formData2.append("age", $("#age").val());
        formData2.append("freeServeStepTwo", JSON.stringify(freeServeStepTwo));
        formData2.append("paidServeStepTwo", JSON.stringify(paidServeStepTwo));
        formData2.append("type_msg", JSON.stringify(service));
        formData2.append("service_msg", JSON.stringify(service_msg));
        formData2.append("time_work", JSON.stringify(dayswork));
        formData2.append("daysswork", JSON.stringify(daysswork));
        formData2.append("goto", $("#goto").val());
        formData2.append("experinse", $("#experinse").val());

        if ($("#upload")[0] && $("#upload")[0].files[0]) {
            formData2.append("pic", $("#upload")[0].files[0]);
        }

        $.ajax({
            url: "/store_two",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: formData2,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    var firstName = $("#fname").val();
                    var lastName = $("#lname").val();
                    var nationality = $("#nationality").val();
                    var age = $("#age").val();
                    const serv_st = service.join(",");

                    var timePriceStr = "";
                    for (var i = 0; i < dayswork.length; i++) {
                        timePriceStr +=
                            dayswork[i].time.substring(0, 7) +
                            " - " +
                            dayswork[i].price +
                            ", ";
                    }
                    timePriceStr = timePriceStr.substring(
                        0,
                        timePriceStr.length - 2
                    );
                    var newRow =
                        "<tr><td>" +
                        firstName +
                        "</td><td>" +
                        lastName +
                        "</td><td>" +
                        nationality +
                        "</td><td>" +
                        age +
                        // "</td><td>" +
                        // serv_st +

                        "</td><td><a style=color:white; class='delete btn btn-danger' data-id='" +
                        response.id +
                        "'><i class='fas fa-trash trac'></i></a></td></tr>";
                    $(".step-three").focus();
                    $("#fname").focus();
                    $("#fname").val("");
                    $("#lname").val("");
                    $("#nationality").val("");
                    $("#age").val("");
                    $("#type_msg").val("");
                    $("#inputaddservice").val("");
                    $("#price_serv").val("");
                    $("#name_serve").val("");
                    $("#inputDataCenter").val("");
                    $("#inputDataCenter").val("");
                    $("#inputData").val("");
                    $("#experinse").val("");
                    $("#goto").val("");
                    $(".price-input").val("");
                    $(".selectt").hide();
                    $("#to-time").val("");
                    $("#from-time").val("");
                    $("#addServ").val("");
                    $("#newserveice").val("");
                    $("#freeServeCenter").val("");
                    $("#priceServeCenter").val("");
                    $("#priceServeCenter2").val("");
                    $("#servicePerson").val("");
                    $("#servicess").val("");
                    $("#servicePersonfree").val("");
                    $("#priceServeperson").val("");
                    $("#priceServeperson2").val("");
                    $("#upload").val("");

                    fileInfo3.innerHTML = "";
                    var fieldset = document.querySelector("#step-two");
                    var formElements = fieldset.querySelectorAll("input, select, textarea, div");
                    for (var i = 0; i < formElements.length; i++) {
                        formElements[i].value = formElements[i].defaultValue;
                    }

                    // remove "selected" class from all div elements
                    var selectedDivs = document.querySelectorAll("div.selected");
                    for (var j = 0; j < selectedDivs.length; j++) {
                        selectedDivs[j].classList.remove("selected");

                    }

                    // hide input fields again
                    var inputFields = document.querySelectorAll(".price-input");
                    for (var k = 0; k < inputFields.length; k++) {
                        inputFields[k].style.display = "none";
                    }

                    service = [];
                    dayswork = [];
                    service_msg = [];
                    daysswork = [];
                    time_work = [];
                    freeServeStepTwo = [];
                    paidServeStepTwo = [];
                    // Append the table row to the table body
                    $(".table-responsive-full tbody").append(newRow);

                    // Show success message
                    var successMsg =
                        '<div class="xd-message msg-success"><div class="xd-message-icon"><i class="ion-checkmark"></i></div><div class="xd-message-content"><p>.تم الاضافه للجدول بنجاح</p></div><a class="xd-message-close"><i class="close-icon ion-close-round"></i></a></div>';
                    $(".msg").append(successMsg);
                    var messageTimeout = setTimeout(function () {
                        $(".msg .xd-message").fadeOut("slow", function () {
                            $(this).remove();
                        });
                    }, 5000);

                    $(".msg .xd-message .xd-message-close").click(function () {
                        clearTimeout(messageTimeout);
                        $(this).closest(".xd-message").hide();
                    });
                }
            },

            error: function (error) {
                console.log(error);
            },
        });
    });

    $(".btn-step-three").click(function (event) {
        event.preventDefault();

        // step three
        var formData3 = new FormData();
        if ($("#upload_formal")[0] && $("#upload_formal")[0].files[0]) {
            formData3.append("upload_formal", $("#upload_formal")[0].files[0]);
        }

        if ($("#upload_center")[0] && $("#upload_center")[0].files[0]) {
            formData3.append("upload_center", $("#upload_center")[0].files[0]);
        }
        formData3.append("name_bank", $("#name_bank").val());
        formData3.append("ipan", $("#ipan").val());

        $.ajax({
            url: "/store_three",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: formData3,
            cache: false,
            contentType: false,
            processData: false,
            error: function (error) {
                console.log(error);
            },
        });
    });
});

// Event listener for the delete icon
$(".table-responsive-full").on("click", ".delete", function (e) {
    e.preventDefault();

    // Get the clicked element and the ID of the record to delete
    var $this = $(this);
    var id = $this.data("id");

    // Send an AJAX request to delete the record from the database
    $.ajax({
        url: "delete/" + id,
        method: "DELETE", // change the HTTP method to "DELETE"
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: { id: id },
        success: function (response) {
            if (response.success) {
                var successMsg =
                    '<div class="xd-message msg-danger"><div class="xd-message-icon"><i class="ion-close-round"></i></div><div class="xd-message-content"><p>.تم حذف المختص</p></div><a class="xd-message-close"><i class="close-icon ion-close-round"></i></a> </div>';
                $(".msg").append(successMsg);

                var messageTimeout = setTimeout(function () {
                    $(".msg .xd-message").fadeOut("slow", function () {
                        $(this).remove();
                    });
                }, 5000);

                $(".msg .xd-message .xd-message-close").click(function () {
                    clearTimeout(messageTimeout);
                    $(this).closest(".msg-danger").hide();
                });

                $this.closest("tr").remove();
            }
        },
        error: function (error) {
            console.log(error);
        },
    });
});

// show input price
function yesnoCheck(that) {
    if (that.value == "منزلي") {
        document.getElementById("ifYes").style.display = "block";
        document.getElementById("free-product").style.display = "none";
        document.getElementById("price-private").style.display = "none";
        document.getElementById("pricing_step_one").style.display = "none";
        document.getElementById("ifNo").style.display = "none";
    } else if (that.value == "الكل") {
        document.getElementById("ifYes").style.display = "block";
        document.getElementById("free-product").style.display = "block";
        document.getElementById("price-private").style.display = "block";
        // document.getElementById("step-two").style.display = "block";
        document.getElementById("ifNo").style.display = "block";
        document.getElementById("ifYes").style.display = "block";
        document.getElementById("free-product").style.display = "block";
        document.getElementById("price-private").style.display = "block";
        document.getElementById("ifNo").style.display = "block"; // show other option
        document.getElementById("pricing_step_one").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
        document.getElementById("free-product").style.display = "block";
        document.getElementById("price-private").style.display = "block";
        document.getElementById("ifNo").style.display = "block"; // show other option
        document.getElementById("pricing_step_one").style.display = "block";
    }
}

// if user select option change color of circles
var circles = document.querySelectorAll(".parent-circle");
circles.forEach(function (circle) {
    circle.addEventListener("click", function () {
        this.classList.toggle("selected");
        let priceInput = this.parentNode.querySelector(".price-input");
        let select = this.parentNode.querySelector(".selectt");
        if (priceInput) {
            if (this.classList.contains("selected")) {
                priceInput.style.display = "inline-block";
            } else if (!this.classList.contains("selected")) {
                priceInput.style.display = "none";
            }
        }
        if (select) {
            if (this.classList.contains("selected")) {
                select.style.display = "flex";
            } else if (!this.classList.contains("selected")) {
                select.style.display = "none";
            }
        }
    });
});

// Get the input elements and the save button
const inputElement = document.getElementById("addServ");
const saveBtn = document.getElementById("saveBtn");

saveBtn.addEventListener("click", function () {
    const inputVal = inputElement.value;

    if (inputVal) {
        selectedOptions.push(inputVal);
    }
    inputElement.value = "";

    console.log(inputVal);
});

const inputElement2 = document.getElementById("newserveice");
const saveBtn2 = document.getElementById("saveBtn2");
saveBtn2.addEventListener("click", function () {
    const inputVal2 = inputElement2.value;

    if (inputVal2) {
        selectedOptionsCenterr.push(inputVal2);
    }

    inputElement2.value = "";

    console.log(inputVal2);
});

const inputElement3 = document.getElementById("freeServeCenter");
const saveBtn3 = document.getElementById("saveBtn3");
saveBtn3.addEventListener("click", function () {
    const inputVal3 = inputElement3.value;

    if (inputVal3) {
        selectedfree.push(inputVal3);
    }

    inputElement3.value = "";

    console.log(inputVal3);
});

const inputElement4 = document.getElementById("priceServeCenter");
const inputElement7 = document.getElementById("priceServeCenter2");
const saveBtn4 = document.getElementById("saveBtn4");
saveBtn4.addEventListener("click", function () {
    const inputVal4 = inputElement4.value;
    const inputVal5 = inputElement7.value;
    if (inputVal4) {
        servicepricece.push({
            price: inputVal5,
            time: inputVal4,
        });
    }

    inputElement4.value = "";
    inputElement7.value = "";

    console.log(inputVal4);
});

const inputElement5 = document.getElementById("servicePerson");
const saveBtn5 = document.getElementById("saveBtn5");
saveBtn5.addEventListener("click", function () {
    const inputVal5 = inputElement5.value;
    if (inputVal5) {
        service.push(inputVal5);
    }

    inputElement5.value = "";

    console.log(inputVal5);
});

const inputElement6 = document.getElementById("servicess");
const saveBtn6 = document.getElementById("saveBtn6");
saveBtn6.addEventListener("click", function () {
    const inputVal6 = inputElement6.value;
    if (inputVal6) {
        service_msg.push(inputVal6);
    }

    inputElement6.value = "";

    console.log(inputVal6);
});


const inputElement9 = document.getElementById("servicePersonfree");
const saveBtn8 = document.getElementById("saveBtn7");
saveBtn8.addEventListener("click", function () {
    const inputVal7 = inputElement9.value;
    if (inputVal7) {
        freeServeStepTwo.push(inputVal7);
    }
    inputElement9.value = "";

    console.log(inputVal7);
});


const inputElement8 = document.getElementById("priceServeperson");
const inputElement10 = document.getElementById("priceServeperson2");
const saveBtn9 = document.getElementById("saveBtn8");
saveBtn9.addEventListener("click", function () {
    const inputVal8 = inputElement8.value;
    const inputVal9 = inputElement10.value;
    if (inputVal8) {
        paidServeStepTwo.push({
            price: inputVal9,
            time: inputVal8,
        });
    }

    inputElement8.value = "";
    inputElement10.value = "";

    console.log(inputVal8);
});



const fileInput = document.getElementById("upload_center");
const fileInfo = document.getElementById("file-info2");

fileInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
        fileInfo.innerHTML = `${file.name} <button class="btn btn-outline-danger btn-sm" id="delete-btn"><i class="fa-solid fa-trash"></i></button>`;
        const deleteBtn = document.getElementById("delete-btn");
        deleteBtn.addEventListener("click", () => {
            fileInput.value = "";
            fileInfo.innerHTML = "";
        });
    }
});

const fileInput2 = document.getElementById("upload_formal");
const fileInfo2 = document.getElementById("file-info1");

fileInput2.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
        fileInfo2.innerHTML = `${file.name} <button class="btn btn-outline-danger btn-sm" id="delete-btn"><i class="fa-solid fa-trash"></i></button>`;
        const deleteBtn = document.getElementById("delete-btn");
        deleteBtn.addEventListener("click", () => {
            fileInput2.value = "";
            fileInfo2.innerHTML = "";
        });
    }
});

const fileInput3 = document.getElementById("upload");
const fileInfo3 = document.getElementById("file-info");
fileInput3.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
        fileInfo3.innerHTML = `${file.name} <button class="btn btn-outline-danger btn-sm" id="delete-btn"><i class="fa-solid fa-trash"></i></button>`;
        const deleteBtn = document.getElementById("delete-btn");
        deleteBtn.addEventListener("click", () => {
            fileInput3.value = "";
            fileInfo3.innerHTML = "";
        });
    }
});

