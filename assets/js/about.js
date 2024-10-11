var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const detailCols = document.querySelectorAll(".detail-col-1, .detail-col-2");

  detailCols.forEach((col) => {
    const details = col.querySelectorAll("details");

    details.forEach((detail) => {
      detail.addEventListener("toggle", () => {
        if (detail.open) {
          details.forEach((otherDetail) => {
            if (otherDetail !== detail) {
              otherDetail.removeAttribute("open");
            }
          });
        }
      });
    });
  });
});
