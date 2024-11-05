$(document).ready(function () {
  //Dropdown Button Functionality
  $(".postMoreBtn").click(function (e) {
    e.preventDefault();
    $("#moreDropdownArea").addClass("dropdown_active");
    $("#dropdownOverlay").show();
    scrollOutsideHidden();
  });
  $(".removeDropdownBtn").click(function (e) {
    e.preventDefault();
    $("#moreDropdownArea").removeClass("dropdown_active");
    $("#dropdownOverlay").hide();
    scrollOutsideScroll();
  });

  //Alert Modal Functionality
  $("#alertModalOpen").click(function (e) {
    e.preventDefault();
    $("#alertModalArea").addClass("alert_modal_active");
    $("#alertOverlay").show();
    scrollOutsideHidden();
  });
  $(".alertModalCloseBtn").click(function (e) {
    e.preventDefault();
    $("#alertModalArea").removeClass("alert_modal_active");
    $("#alertOverlay").hide();
    scrollOutsideScroll();
  });

  //More less functionality
  const maxLength = 400; // Set the max characters to show initially

  $(" .descriptionPara").each(function () {
    const fullText = $(this).text().trim();
    const truncatedText = fullText.slice(0, maxLength);

    // If full text is longer, show truncated and save full text in data attribute
    if (fullText.length > maxLength) {
      $(this).data("full-text", fullText);
      $(this).html(truncatedText + ' <span class="more_less_btn">more...</span>');
    }
  });

  // Toggle text on clicking the paragraph
  $(".descriptionPara").on("click", function () {
    const $description = $(this);
    const fullText = $description.data("full-text");
    const truncatedText = fullText.slice(0, maxLength);

    if ($description.hasClass("expanded")) {
      $description.html(
        truncatedText + ' <span class="more_less_btn">more...</span>'
      );
      $description.removeClass("expanded");
    } else {
      $description.html(fullText + ' <span class="more_less_btn">less</span>');
      $description.addClass("expanded");
    }
  });
});

//Add Class
function displayItem(addID, addClass, ovlerlayID) {
  let addDiv = document.querySelector(`#${addID}`);
  let ovlerlayDiv = document.querySelector(`#${ovlerlayID}`);
  addDiv.classList.toggle(addClass);
  ovlerlayDiv.style.cssText = "  display: block;";
}
//Remove Class
function removeDisplayItem(removeID, removeClass, ovlerlayID) {
  let addDiv = document.querySelector(`#${removeID}`);
  let ovlerlayDiv = document.querySelector(`#${ovlerlayID}`);
  addDiv.classList.toggle(removeClass);
  ovlerlayDiv.style.cssText = "  display: none;";
}

//OutSide Scroll Hidden
function scrollOutsideHidden() {
  let htmlTag = document.querySelector("html");
  htmlTag.style.cssText = "overflow:hidden;";
}
//OutSide Scroll Scroll
function scrollOutsideScroll() {
  let htmlTag = document.querySelector("html");
  htmlTag.style.cssText = "overflow:auto;";
}

// Form Validation Methods Using Bootstrap 5
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();
