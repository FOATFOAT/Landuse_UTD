<?php
// สร้างตัวแปร URL ของหน้านโยบายการใช้งานคุกกี้
$cookiePolicyUrl = site_url('admin/cookie_policy');
?>

<script>
const config = {
  current_lang: "th",
  autorun: true,
  autoclear_cookies: true,
  languages: {
    en: {
      consent_modal: {
        title: "เว็บไซต์ของเรามีการใช้งานคุกกี้ (Cookies)",
        description:
          'เราใช้คุกกี้เพื่อเพิ่มประสิทธิภาพ และประสบการณ์ที่ดีในการใช้งานเว็บไซต์ คุณสามารถเลือกตั้งค่าความยินยอมการใช้คุกกี้ได้ โดยคลิก "<a href="<?= $cookiePolicyUrl ?>" class="cc-link">นโยบายการใช้งานคุกกี้</a>". <button type="button" data-cc="c-settings" class="cc-link">การตั้งค่าคุกกี้</button>',
        primary_btn: {
          text: "ยอมรับคุกกี้ทั้งหมด",
          role: "accept_all",
        },
        secondary_btn: {
          text: "ตั้งค่าคุกกี้",
          role: "settings",
        },
      },
      settings_modal: {
        title: "Cookie preferences",
        save_settings_btn: "Save settings",
        accept_all_btn: "ยอมรับคุกกี้ทั้งหมด",
        reject_all_btn: "ไม่ยอมรับคุกกี้ทั้งหมด",
        close_btn_label: "Close",
        cookie_table_headers: [
          { col1: "Name" },
          { col2: "Domain" },
          { col3: "Expiration" },
          { col4: "Description" },
        ],
        blocks: [
          {
            title: "ประเภทของคุกกี้ที่บริษัทใช้ 📢",
            description:
              'I use cookies to ensure the basic functionalities of the website and to enhance your online experience. You can choose for each category to opt-in/out whenever you want. For more details relative to cookies and other sensitive data, please read the full <a href="#" class="cc-link">privacy policy</a>.',
          },
          {
            title: "คุกกี้พื้นฐานที่จำเป็น",
            description:
              "These cookies are essential for the proper functioning of my website. Without these cookies, the website would not work properly",
            toggle: {
              value: "necessary",
              enabled: true,
              readonly: true,
            },
          },
          {
            title: "คุกกี้ในส่วนวิเคราะห์",
            description:
              "These cookies allow the website to remember the choices you have made in the past",
            toggle: {
              value: "analytics",
              enabled: false,
              readonly: false,
            },
            cookie_table: [
              {
                col1: "^_ga",
                col2: "google.com",
                col3: "2 years",
                col4: "description ...",
                is_regex: true,
              },
              {
                col1: "_gid",
                col2: "google.com",
                col3: "1 day",
                col4: "description ...",
              },
            ],
          },
          {
            title: "คุกกี้ในการโฆษณาและการกำหนดเป้าหมาย",
            description:
              "These cookies collect information about how you use the website, which pages you visited and which links you clicked on. All of the data is anonymized and cannot be used to identify you",
            toggle: {
              value: "targeting",
              enabled: false,
              readonly: false,
            },
          },
          {
            title: "More information",
            description:
              'For any queries in relation to our policy on cookies and your choices, please <a class="cc-link" href="#yourcontactpage">contact us</a>.',
          },
        ],
      },
    },
  },
};

let cc = initCookieConsent();
cc.run(config);

</script>