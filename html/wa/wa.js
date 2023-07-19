$('#example').czmChatSupport({

    /* Button Settings */
    button: {
        position: "right", /* left, right or false. "position:false" does not pin to the left or right */
        style: 3, /* Button style. Number between 1 and 7 */
        src: '<i class="fab fa-whatsapp"></i>', /* Image, Icon or SVG */
        backgroundColor: "#10c379", /* Html color code */
        effect: 2, /* Button effect. Number between 1 and 7 */
        speechBubble: "¿En que los podemos ayudar?", /* To remove, (speechBubble:false) */
        pulseEffect: false, /* To remove, (pulseEffect:false) */
        text: { /* For Button style larger than 1 */
            title: "WhatsApp", /* Writing is required */
            description: "Mon-Sat: 6:45/17:00", /* To remove, (description:false) */
            online: "", /* To remove, (online:false) */
            offline: "" /* To remove, (offline:false) */
        }
    },

    /* Popup Settings */
    popup: {
        automaticOpen: false, /* true or false (Open popup automatically when the page is loaded) */
        outsideClickClosePopup: true, /* true or false (Clicking anywhere on the page will close the popup) */
        effect: 1, /* Popup opening effect. Number between 1 and 15 */
        header: {
            backgroundColor: "#10c379", /* Html color code */
            title: "Converse con nosotros", /* Writing is required */
            description: "Haga clic acontinuacion para chatear por WhatsApp" /* To remove, (description:false) */
        },

        /* Representative Settings */
        persons: [

            /* Copy for more representatives [::Start Copy::] */
            {
                avatar: {
                    src: '<img src="/html/wa/logo_crc.png" alt="CRC - SSO">', /* Image, Icon or SVG */
                    backgroundColor: "#FFFFF", /* Html color code */
                    onlineCircle: true /* Avatar online circle. To remove, (onlineCircle:false) */
                },
                text: {
                    title: "CRC", /* Writing is required */
                    description: "Centro de Reconocimiento para Conductores", /* To remove, (description:false) */
                    online: "En Linea", /* To remove, (online:false) */
                    offline: "Fuera de Linea" /* To remove, (offline:false) */
                },
                link: {
                    desktop: "https://web.whatsapp.com/send?phone=+573157400411&text=Hola....!", /* Writing is required */
                    mobile: "https://wa.me/+573157400411/?text=Hola....!" /* If it is hidden desktop link will be valid. To remove, (mobile:false) */
                },
                onlineDay: {
                    /* Change the day you are offline like this. (sunday:false) */
                    monday: "06:00-18:00",
                    tuesday: "06:00-18:00",
                    wednesday: "06:00-18:00",
                    thursday: "06:00-18:00",
                    friday: "06:00-18:00",
                    saturday: "06:00-11:00"
                }
            },
            /* [::End Copy::] */

            /* Copy for more representatives [::Start Copy::] */
            {
                avatar: {
                    src: '<img src="/html/wa/logo_sso.png">', /* Font, Image or SVG */
                    backgroundColor: "#FFFFF", /* Html color code */
                    onlineCircle: true /* Avatar online circle. To remove, (onlineCircle:false) */
                },
                text: {
                    title: "Atencion al Usuario SSO", /* Writing is required */
                    description: "Servicios de Salud Ocupacional", /* Custom text or false. To remove, (description:false) */
                    online: "En Linea", /* Custom text or false. To remove, (online:false) */
                    offline: "Fuera de Linea" /* Custom text or false. To remove, (offline:false) */
                },
                link: {
                    desktop: "https://web.whatsapp.com/send?phone=+573135464664&text=Hola.....", /* Writing is required */
                    mobile: "https://wa.me/+573135464664/?text=Hola...." /* If it is hidden desktop link will be valid. To remove, (mobile:false) */
                },
                onlineDay: {
                    /* Change the day you are offline like this. (sunday:false) */
                    monday: "06:40-17:00",
                    tuesday: "06:40-17:00",
                    wednesday: "06:40-17:00",
                    thursday: "06:40-17:00",
                    friday: "06:40-17:00",
                    saturday: "06:40-11:00"
                }
            },
            /* [::End Copy::] */

        ]
    },

    });