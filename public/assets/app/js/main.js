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

  //Modal Functionality
  $("#modalOpenBtn,.modalOpenBtn").click(function (e) {
    e.preventDefault();
    $("#modalArea").addClass("modal_active");
    $("#modalOverlay").show();
    scrollOutsideHidden();
  });
  $(".modalFormCloseBtn").click(function (e) {
    e.preventDefault();
    $("#modalArea").removeClass("modal_active");
    $("#modalOverlay").hide();
    scrollOutsideScroll();
  });

  //Ratting Modal Functionality
  $(".reviewBtn").click(function (e) {
    e.preventDefault();
    $("#rattingModalArea").addClass("active_ratting");
    $("#rattingOverlay").show();
    scrollOutsideHidden();
  });
  $(".removeRattingBtn").click(function (e) {
    e.preventDefault();
    $("#rattingModalArea").removeClass("active_ratting");
    $("#rattingOverlay").hide();
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
      $(this).html(
        truncatedText + ' <span class="more_less_btn">more...</span>'
      );
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

  //Text line clamp
  $(".text-line-clamp2").clamp({
    clamp: 2,
    alwaysDisplay: false,
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

//Fixed screen height
function updateVH() {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
}
window.addEventListener("resize", updateVH);
updateVH();

document.addEventListener("DOMContentLoaded", function (e) {
  //Nice select 2

  // searchAbleSelect
  var searchAbleSelect = document.querySelectorAll(".searchableSelect");
  searchAbleSelect.forEach(function (select) {
    console.log("select", select, select.getAttribute("data-placeholder"));
    NiceSelect.bind(select, {
      searchable: true,
      placeholder: select.getAttribute("data-placeholder"),
      searchtext: "Search",
    });
  });
});
