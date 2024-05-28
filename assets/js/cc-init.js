const config = {
    current_lang: "th",
    autorun: true,
    autoclear_cookies: true,
    languages: {
      en: {
        consent_modal: {
          title: "เว็บไซต์ของเรามีการใช้งานคุกกี้ (Cookies)",
          description:
          'เราใช้คุกกี้เพื่อเพิ่มประสิทธิภาพ และประสบการณ์ที่ดีในการใช้งานเว็บไซต์ คุณสามารถเลือกตั้งค่าความยินยอมการใช้คุกกี้ได้ โดยคลิก "<a href=\"/Landuse_UTD/admin/cookie_policy\" class="cc-link">นโยบายการใช้งานคุกกี้</a>"',
          primary_btn: {
            text: "ยอมรับคุกกี้ทั้งหมด",
            role: "accept_all", // 'accept_selected' or 'accept_all'
          },
          
          
          secondary_btn: {
            text: "ตั้งค่าคุกกี้",
            role: "settings", // 'settings' or 'accept_necessary'
          },
        },
        settings_modal: {
          title: "สํานักงานโยธาธิการและผังเมืองอุตรดิตถ์",
          save_settings_btn: "บันทึกการตั้งค่า",
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
              title: "ประเภทของคุกกี้ที่สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์ใช้",
              description:
                'สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์จะใช้คุกกี้เมื่อท่านได้เข้าเยี่ยมชมเว็บไซต์ โดยการใช้งานคุกกี้ของเราแบ่งออกตามลักษณะของการใช้งานได้ดังนี้ .',
            },
            {
              title: "คุกกี้พื้นฐานที่จำเป็น",
              description:
                "คุกกี้เหล่านี้เป็นสิ่งจำเป็นสำหรับการทำงานของเว็บไซต์ของฉันอย่างถูกต้อง หากไม่มีคุกกี้เหล่านี้ เว็บไซต์จะไม่ทำงานอย่างถูกต้อง",
              toggle: {
                value: "necessary",
                enabled: true,
                readonly: true, // cookie categories with readonly=true are all treated as "necessary cookies"
              },
            },
            {
              title: "คุกกี้ประสิทธิผลและวิเคราะห์",
              description:
                "ทุกครั้งที่คุณใช้เว็บไซต์นี้, คุกกี้เหล่านี้ช่วยให้เว็บไซต์จดจำความเลือกที่คุณทำไว้ในอดีต",
              toggle: {
                value: "analytics", // your cookie category
                enabled: false,
                readonly: false,
              },
              // title: "คุกกี้ในการโฆษณาและการกำหนดเป้าหมาย",
              description: "คุกกี้ประเภทนี้จะเก็บข้อมูลที่รวมถึงข้อมูลส่วนบุคคล เพื่อสร้างโปรไฟล์และนำเสนอเนื้อหา สินค้า/บริการ และ/หรือ โฆษณาที่เหมาะสมกับความสนใจของคุณ หากไม่ต้องการให้ใช้คุกกี้ประเภทนี้ อาจทำให้ได้รับข้อมูลและโฆษณาทั่วไปที่ไม่ตรงกับความสนใจของคุณ",
        
              // cookie_table: [
              //   // list of all expected cookies
              //   {
              //     col1: "^_ga", // match all cookies starting with "_ga"
              //     col2: "google.com",
              //     col3: "2 years",
              //     col4: "description ...",
              //     is_regex: true,
              //   },
              //   {
              //     col1: "_gid",
              //     col2: "google.com",
              //     col3: "1 day",
              //     col4: "description ...",
              //   },
              // ],
            },
            {
              title: "คุกกี้ในการโฆษณาและการกำหนดเป้าหมาย",
              description:
                "คุกกี้เหล่านี้เก็บข้อมูลเกี่ยวกับวิธีที่คุณใช้เว็บไซต์ หน้าไหนที่คุณเยี่ยมชมและลิงก์ไหนที่คุณคลิก เนื้อหาข้อมูลทั้งหมดถูกทำให้ไม่สามารถระบุตัวตนของคุณได้",
              toggle: {
                value: "targeting",
                enabled: false,
                readonly: false,
              },
            },
            {
              title: "ข้อมูลเพิ่มเติม",
              description:
                'สำหรับคำถามใด ๆ เกี่ยวกับนโยบายคุกกี้และตัวเลือกของคุณ โดยคลิก "<a href=\"/Landuse_UTD/admin/cookie_policy\" class="cc-link">นโยบายการใช้งานคุกกี้</a>"',
            },
          ],
        },
      },
    },
  };


let cc = initCookieConsent();
cc.run(config);

