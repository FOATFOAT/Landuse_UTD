<a href="https://landsmaps.dol.go.th/" id="landsmaps-link" onclick="selectProvince()">เปิดหน้าเว็บ Landsmaps</a>

<script>
function selectProvince() {
    // เลือก option ที่มีค่าเป็น "41" (อุดรธานี)
    document.getElementById("cbprovince").value = "41";
    
    // ส่งคำขอฟอร์มไปยัง URL ของเว็บไซต์เพื่อเรียกใช้งาน
    // อาจเป็นการส่งคำขอ GET หรือการทำการ post ข้อมูลลงไปก็ได้ตามที่เว็บไซต์รับคำขอ
    // ตัวอย่างเช่น:
    document.getElementById("cbprovince").form.submit();
}
</script>
