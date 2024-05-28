var itemsPerPageGlobal = 5; // ตัวแปร global เพื่อเก็บค่าจำนวนรายการต่อหน้า
var currentPageNumber = 1; // ตัวแปรเก็บหน้าปัจจุบัน
var currentSearchKeyword = ""; // ตัวแปรเก็บคำค้นหาปัจจุบัน

function showPage(pageNumber) {
    currentPageNumber = pageNumber; // อัปเดตหน้าปัจจุบัน

    var table = document.getElementById("data-table");
    var rows = table.getElementsByTagName("tr");

    var startIndex = (pageNumber - 1) * itemsPerPageGlobal + 1;
    var endIndex = startIndex + itemsPerPageGlobal - 1;
    if (endIndex > rows.length - 1) {
        endIndex = rows.length - 1;
    }

    foundRowsCount = 0; // กำหนดค่าเริ่มต้นของจำนวนแถวที่พบเป็น 0

    for (var i = 1; i < rows.length; i++) {
        var rowData = rows[i].textContent.toLowerCase(); // เปลี่ยนข้อความในแถวเป็นตัวพิมพ์เล็กทั้งหมด
        if (rowData.includes(currentSearchKeyword.toLowerCase())) { // ตรวจสอบว่าข้อความในแถวมีคำค้นหาหรือไม่
            foundRowsCount++; // เพิ่มจำนวนแถวที่พบเมื่อข้อความตรงกับคำค้นหา
            if (foundRowsCount >= startIndex && foundRowsCount <= endIndex) {
                rows[i].style.display = "table-row";
            } else {
                rows[i].style.display = "none";
            }
        } else {
            rows[i].style.display = "none"; // ถ้าไม่มีคำค้นหาในแถว ซ่อนแถวนั้นไว้
        }
    }

    updatePagination(pageNumber, startIndex, endIndex, foundRowsCount); // แก้ไขการเรียกใช้ updatePagination ให้ใช้ foundRowsCount แทน total
}


function setItemsPerPage(itemsPerPage) {
    itemsPerPageGlobal = itemsPerPage; // กำหนดค่าจำนวนรายการต่อหน้าเป็นค่าที่ผู้ใช้เลือก
    showPage(1); // แสดงหน้าแรกหลังจากการเปลี่ยนจำนวนรายการต่อหน้า
}

function search(keyword) {
    currentSearchKeyword = keyword; // เก็บคำค้นหาปัจจุบัน
    currentPageNumber = 1; // กำหนดหน้าปัจจุบันเป็นหน้าแรก เมื่อมีการค้นหาใหม่
    showPage(currentPageNumber); // แสดงผลของการค้นหาบนหน้าปัจจุบัน
}

document.addEventListener("DOMContentLoaded", function () {
    showPage(1); // แสดงหน้าแรกเมื่อโหลดหน้า

    // ตรวจจับเหตุการณ์การเปลี่ยนแปลงของค่าในช่องค้นหา
    var searchInput = document.getElementById("searchInput");
    searchInput.addEventListener("input", function () {
        var keyword = this.value.trim(); // รับคำค้นหาและตัดช่องว่างที่ต้นท้ายและท้ายสตริง
        search(keyword); // เรียกใช้ฟังก์ชันค้นหา
    });
});

function updatePagination(currentPage, startIndex, endIndex, total) {
    var existingPagination = document.querySelector(".pagination");
    if (existingPagination) {
        existingPagination.remove();
    }

    var table = document.getElementById("data-table");
    var rows = table.getElementsByTagName("tr");

    var totalPages = Math.ceil((rows.length - 1) / itemsPerPageGlobal);
    var paginationContainer = document.createElement("div");
    paginationContainer.className = "pagination";

    var pageLinkFirst = document.createElement("a");
    pageLinkFirst.href = "#";
    pageLinkFirst.innerText = "หน้าแรก";
    pageLinkFirst.onclick = function () {
        showPage(1);
    };
    paginationContainer.appendChild(pageLinkFirst);

    var pageLinkPrev = document.createElement("a");
    pageLinkPrev.href = "#";
    pageLinkPrev.innerText = "ก่อนหน้า";
    pageLinkPrev.onclick = function () {
        if (currentPage > 1) {
            showPage(currentPage - 1);
        }
    };
    paginationContainer.appendChild(pageLinkPrev);

    var pageLinksStart = Math.max(1, currentPage - 3);
    var pageLinksEnd = Math.min(totalPages, currentPage + 3);

    if (pageLinksStart > 1) {
    var pageLinkPrevEllipsis = document.createElement("span");
    pageLinkPrevEllipsis.innerText = "...";
    pageLinkPrevEllipsis.classList.add("ellipsis"); // เพิ่ม class ellipsis
    paginationContainer.appendChild(pageLinkPrevEllipsis);
}

    for (var i = pageLinksStart; i <= pageLinksEnd; i++) {
        var pageLink = document.createElement("a");
        pageLink.href = "#";
        pageLink.innerText = i;

        if (i === currentPage) {
            pageLink.style.backgroundColor = "#ddd";
        }

        pageLink.onclick = function () {
            showPage(parseInt(this.innerText));
        };

        paginationContainer.appendChild(pageLink);
    }

    if (pageLinksEnd < totalPages) {
    var pageLinkNextEllipsis = document.createElement("span");
    pageLinkNextEllipsis.innerText = "...";
    pageLinkNextEllipsis.classList.add("ellipsis"); // เพิ่ม class ellipsis
    paginationContainer.appendChild(pageLinkNextEllipsis);
}

    var pageLinkNext = document.createElement("a");
    pageLinkNext.href = "#";
    pageLinkNext.innerText = "ถัดไป";
    pageLinkNext.onclick = function () {
        if (currentPage < totalPages) {
            showPage(currentPage + 1);
        }
    };
    paginationContainer.appendChild(pageLinkNext);

    var pageLinkLast = document.createElement("a");
    pageLinkLast.href = "#";
    pageLinkLast.innerText = "หน้าสุดท้าย";
    pageLinkLast.onclick = function () {
        showPage(totalPages);
    };
    paginationContainer.appendChild(pageLinkLast);

    var paginationInfo = document.getElementById('pagination-info');
    paginationInfo.textContent = `กำลังแสดง ${startIndex} ถึง ${endIndex} จาก ${total} รายการ (จากทั้งหมด ${rows.length - 1} รายการ)`;

    var cardBody = document.querySelector(".card-body");
    cardBody.appendChild(paginationContainer);
}
