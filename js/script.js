window.addEventListener("DOMContentLoaded", function () {
  "use strict";
  /*jshint -W007 */

  let openPrivacy = document.querySelector("footer a"),
    openPrivacyModal = document.querySelector(".overlay a"),
    privacy = document.querySelector(".privacy"),
    privacyCloseBtn = document.querySelectorAll(".privacy__back"),
    mainBtn = document.querySelector(".button"),
    overlay = document.querySelector(".overlay"),
    modal = document.querySelector(".modal"),
    modalClose = document.querySelector(".modal__close"),
    modalForm = document.querySelectorAll(".modal__form"),
    btnPrev = document.querySelectorAll(".button_prev"),
    btnNext = document.querySelectorAll(".button_next"),
    quest1 = document.querySelectorAll("input[name=question_1]"),
    quest2 = document.querySelectorAll("input[name=question_2]"),
    quest3 = document.querySelectorAll("input[name=question_3]"),
    quest4 = document.querySelectorAll("input[name=question_4]"),
    quest5 = document.querySelectorAll("input[name=question_5]"),
    quest6 = document.querySelectorAll("input[name=question_6]"),
    quest7 = document.querySelectorAll("input[name=question_7]"),
    quest8 = document.querySelectorAll("input[name=question_8]"),
    quest9 = document.querySelectorAll("input[name=question_9]"),
    quest10 = document.querySelectorAll("input[name=question_10]"),
    quest11 = document.querySelectorAll("input[name=question_11]"),
    modalCounter = document.querySelector(".modal__counter"),
    modalPercentsDig = document.querySelector(".modal__percents span"),
    modalPercentsBarBlue = document.querySelector(
      ".modal__progressbar hr:first-child"
    ),
    modalPercentsBarGrey = document.querySelector(
      ".modal__progressbar hr:last-child"
    ),
    noHistory = document.querySelector(".nohistory"),
    fssp = document.querySelector(".modal__fssp"),
    failure = document.querySelector(".failure"),
    failureClose = document.querySelector(".failure__close"),
    modalThanks = document.querySelector(".modal__thanks"),
    modalDescr = document.querySelector(".modal__descr"),
    inputName = document.querySelector("input[name=name]"),
    inputEmail = document.querySelector("input[name=email]"),
    inputPhone = document.querySelector("input[name=phone]");

  openPrivacy.addEventListener("click", function (e) {
    e.preventDefault();
    privacy.style.display = "block";
  });

  openPrivacyModal.addEventListener("click", function (e) {
    e.preventDefault();
    privacy.style.display = "block";
  });

  privacyCloseBtn.forEach(function (item) {
    item.addEventListener("click", function () {
      privacy.style.display = "none";
    });
  });

  mainBtn.addEventListener("click", function () {
    modalCounter.textContent = "1/11";
    modalForm.forEach(function (item) {
      item.classList.remove("modal__form_active");
    });
    modalForm[0].classList.add("modal__form_active");
    overlay.style.display = "block";
    modalPercentsDig.textContent = "10%";
    modalPercentsBarBlue.style.width = "10%";
    modalPercentsBarGrey.style.width = "90%";
  });

  modalClose.addEventListener("click", function () {
    overlay.style.display = "none";
  });

  failureClose.addEventListener("click", function () {
    failure.classList.remove("failure_active");
    overlay.style.display = "none";
  });

  modalForm.forEach(function (item, i) {
    if (i == 0) {
      btnPrev[i].addEventListener("click", function () {
        modalCounter.textContent = "1/11";
        overlay.style.display = "none";
      });
      quest1.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            modalCounter.textContent = "2/11";
            item.classList.remove("modal__form_active");
            modalForm[i + 1].classList.add("modal__form_active");
          });
        });
      });
    } else if (i == 1) {
      btnPrev[i].addEventListener("click", function () {
        modalCounter.textContent = "1/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest2.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            if (quest2[1].checked == true) {
              modal.style.display = "none";
              noHistory.classList.add("nohistory_active");
            } else {
              modalCounter.textContent = "3/11";
              item.classList.remove("modal__form_active");
              modalForm[i + 1].classList.add("modal__form_active");
            }
          });
        });
      });
    } else if (i == 2) {
      btnPrev[i].addEventListener("click", function () {
        modalCounter.textContent = "2/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest3.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            modalCounter.textContent = "4/11";
            item.classList.remove("modal__form_active");
            modalForm[i + 1].classList.add("modal__form_active");
          });
        });
      });
    } else if (i == 3) {
      btnPrev[i].addEventListener("click", function () {
        modalCounter.textContent = "3/11";
        modalPercentsDig.textContent = "10%";
        modalPercentsBarBlue.style.width = "10%";
        modalPercentsBarGrey.style.width = "90%";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest4.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            if (quest4[0].checked == true || quest4[1].checked == true) {
              modalPercentsDig.textContent = "15%";
              modalPercentsBarBlue.style.width = "15%";
              modalPercentsBarGrey.style.width = "85%";
            } else {
              modalPercentsDig.textContent = "25%";
              modalPercentsBarBlue.style.width = "25%";
              modalPercentsBarGrey.style.width = "75%";
            }
            modalCounter.textContent = "5/11";
            item.classList.remove("modal__form_active");
            modalForm[i + 1].classList.add("modal__form_active");
          });
        });
      });
    } else if (i == 4) {
      btnPrev[i].addEventListener("click", function () {
        if (quest5[0].checked == true) {
          let n = modalPercentsDig.textContent.slice(
            0,
            modalPercentsDig.textContent.length - 1
          );
          modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
            +n - 5 + "%";
          modalPercentsBarGrey.style.width = 100 - +n + 5 + "%";
        }
        modalCounter.textContent = "4/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest5.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            if (quest5[0].checked == true) {
              let n = modalPercentsDig.textContent.slice(
                0,
                modalPercentsDig.textContent.length - 1
              );
              modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
                5 + +n + "%";
              modalPercentsBarGrey.style.width = 100 - +n - 5 + "%";
            }
            modalCounter.textContent = "6/11";
            item.classList.remove("modal__form_active");
            modalForm[i + 1].classList.add("modal__form_active");
          });
        });
      });
    } else if (i == 5) {
      btnPrev[i].addEventListener("click", function () {
        if (quest6[0].checked == true) {
          let n = modalPercentsDig.textContent.slice(
            0,
            modalPercentsDig.textContent.length - 1
          );
          modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
            +n - 10 + "%";
          modalPercentsBarGrey.style.width = 100 - +n + 10 + "%";
        }
        modalCounter.textContent = "5/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest6.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            modalCounter.textContent = "7/11";
            if (quest6[2].checked == true) {
              modal.style.display = "none";
              failure.classList.add("failure_active");
            } else {
              if (quest6[0].checked == true) {
                let n = modalPercentsDig.textContent.slice(
                  0,
                  modalPercentsDig.textContent.length - 1
                );
                modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
                  10 + +n + "%";
                modalPercentsBarGrey.style.width = 100 - +n - 10 + "%";
              }
              item.classList.remove("modal__form_active");
              modalForm[i + 1].classList.add("modal__form_active");
            }
          });
        });
      });
    } else if (i == 6) {
      btnPrev[i].addEventListener("click", function () {
        if (quest7[0].checked == true) {
          let n = modalPercentsDig.textContent.slice(
            0,
            modalPercentsDig.textContent.length - 1
          );
          modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
            +n - 10 + "%";
          modalPercentsBarGrey.style.width = 100 - +n + 10 + "%";
        }
        modalCounter.textContent = "6/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest7.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            modalCounter.textContent = "8/11";
            if (quest7[2].checked == true) {
              modal.style.display = "none";
              failure.classList.add("failure_active");
            } else {
              if (quest7[0].checked == true) {
                let n = modalPercentsDig.textContent.slice(
                  0,
                  modalPercentsDig.textContent.length - 1
                );
                modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
                  10 + +n + "%";
                modalPercentsBarGrey.style.width = 100 - +n - 10 + "%";
              }
              item.classList.remove("modal__form_active");
              modalForm[i + 1].classList.add("modal__form_active");
            }
          });
        });
      });
    } else if (i == 7) {
      btnPrev[i].addEventListener("click", function () {
        if (quest8[0].checked == true) {
          let n = modalPercentsDig.textContent.slice(
            0,
            modalPercentsDig.textContent.length - 1
          );
          modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
            +n - 15 + "%";
          modalPercentsBarGrey.style.width = 100 - +n + 15 + "%";
        }
        modalCounter.textContent = "7/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest8[1].addEventListener("input", function () {
        fssp.style.display = "block";
      });
      quest8.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            modalCounter.textContent = "9/11";
            if (quest8[2].checked == true) {
              modal.style.display = "none";
              failure.classList.add("failure_active");
            } else {
              if (quest8[0].checked == true) {
                let n = modalPercentsDig.textContent.slice(
                  0,
                  modalPercentsDig.textContent.length - 1
                );
                modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
                  15 + +n + "%";
                modalPercentsBarGrey.style.width = 100 - +n - 15 + "%";
              }
              item.classList.remove("modal__form_active");
              modalForm[i + 1].classList.add("modal__form_active");
            }
          });
        });
      });
    } else if (i == 8) {
      btnPrev[i].addEventListener("click", function () {
        modalCounter.textContent = "8/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest9.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            modalCounter.textContent = "10/11";
            if (quest9[1].checked == true) {
              modal.style.display = "none";
              failure.classList.add("failure_active");
            } else {
              item.classList.remove("modal__form_active");
              modalForm[i + 1].classList.add("modal__form_active");
            }
          });
        });
      });
    } else if (i == 9) {
      btnPrev[i].addEventListener("click", function () {
        if (quest10[0].checked == true) {
          let n = modalPercentsDig.textContent.slice(
            0,
            modalPercentsDig.textContent.length - 1
          );
          modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
            +n - 10 + "%";
          modalPercentsBarGrey.style.width = 100 - +n + 10 + "%";
        }
        modalCounter.textContent = "9/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest10.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            modalCounter.textContent = "11/11";
            if (quest10[2].checked == true) {
              modal.style.display = "none";
              failure.classList.add("failure_active");
            } else {
              if (quest10[0].checked == true) {
                let n = modalPercentsDig.textContent.slice(
                  0,
                  modalPercentsDig.textContent.length - 1
                );
                modalPercentsBarBlue.style.width = modalPercentsDig.textContent =
                  10 + +n + "%";
                modalPercentsBarGrey.style.width = 100 - +n - 10 + "%";
              }
              item.classList.remove("modal__form_active");
              modalForm[i + 1].classList.add("modal__form_active");
            }
          });
        });
      });
    } else if (i == 10) {
      btnPrev[i].addEventListener("click", function () {
        modalCounter.textContent = "10/11";
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
      });
      quest11.forEach(function (reason) {
        reason.addEventListener("change", function () {
          btnNext[i].addEventListener("click", function () {
            item.classList.remove("modal__form_active");
            modalForm[i + 1].classList.add("modal__form_active");
            modalDescr.textContent =
              "Отлично! Вы описали свою ситуацию." +
              "Теперь укажите Ваши контакты," +
              "чтобы мы могли с Вами связаться для оформления кредита!";
            modalDescr.classList.add("modal__descr_final");
          });
        });
      });
    } else {
      btnPrev[i].addEventListener("click", function () {
        item.classList.remove("modal__form_active");
        modalForm[i - 1].classList.add("modal__form_active");
        modalDescr.textContent =
          "Ответьте на наши вопросы и увеличьте шансы на одобрение кредита";
        modalDescr.classList.remove("modal__descr_final");
      });
    }
  });

  $(".overlay").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true,
      },
      phone: "required",
    },
    messages: {
      name: "Пожалуйста, введите свое имя",
      email: {
        required: "Пожалуйста, введите свою почту",
        email: "Неправильно введен адрес почты",
      },
      phone: "Пожалуйста, введите свой телефон",
    },
  });

  $("input[name=phone]").mask("+7 (999) 999-99-99");

    overlay.addEventListener("submit", function (event) {
     event.preventDefault();
     let formData = new FormData(overlay);

     function postData(data) {
       let request = new XMLHttpRequest();
       request.open("POST", "mailer/smart.php");
       
       request.addEventListener("readystatechange", function () {
         if (request.readyState === 4 && request.status == 200) {
           if (
             inputName.value != "" &&
             inputEmail.value != "" &&
             inputPhone.value != ""
           ) {
             modalForm.forEach(function (item) {
               item.classList.remove("modal__form_active");
             });
             modalThanks.style.display = "block";
           }
         }
       });

       request.send(data);
     }

     function clearInput() {
       let input = document.querySelectorAll("input");
       for (let i = 0; i < input.length; i++) {
         input[i].value = "";
       }
     }

     postData(formData);
     clearInput();
   });
});
