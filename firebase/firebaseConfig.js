// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyBGEuBbl1wVxGKcJmx0IalP4ouX1sGTpqw",
    authDomain: "juliengournay-dbd79.firebaseapp.com",
    projectId: "juliengournay-dbd79",
    storageBucket: "juliengournay-dbd79.firebasestorage.app",
    messagingSenderId: "647579528890",
    appId: "1:647579528890:web:306ea7db2c211b2f675c83",
    measurementId: "G-4D7DGZD6D7"
    };
    
    const app = firebase.initializeApp(firebaseConfig)
    const messaging = firebase.messaging()
    messaging.getToken({vapidKey: "BGhV1yt2bCoxGeWPG0SDW8q9iQIYFoUZhBye6WtwcgiRC0bI_6c2hk9qo-Nr4PQPLhSurYyzlRKKCcRYelDhowM"})
    /*messaging.onMessage((payload) => {
        console.log("Message received",payload);
        const messagesElement = document.querySelector('.message')
        const dataHeaderElement = document.createElement('h5')
        const dataMessageElement = document.createElement('pre')
        dataElement.style = "overflow-x: hidden;"
        dataHeaderElement.textContent = "Message Received :"
        dataElement.textContent = JSON.stringify(payload, null, 2)
        messagesElement.appendChild(dataHeaderElement)
        messagesElement.appendChild(dataElement)
    })*/
        
    Notification.requestPermission()
    .then((permission) => {
        if (permission === "granted") {
            // L'utilisateur a autorisé les notifications
            messaging.getToken({ vapidKey: 'BGhV1yt2bCoxGeWPG0SDW8q9iQIYFoUZhBye6WtwcgiRC0bI_6c2hk9qo-Nr4PQPLhSurYyzlRKKCcRYelDhowM' })
                .then((currentToken) => {
                    if (currentToken) {
                        console.log("Token FCM :", currentToken);
                    } else {
                        console.log("Aucun token disponible.");
                    }
                })
                .catch((err) => {
                    console.error("Erreur lors de l'obtention du token FCM :", err);
                });
        } else if (permission === "denied") {
            console.warn("Permission pour les notifications refusée.");
        } else {
            console.warn("Permission pour les notifications bloquée ou indéterminée.");
        }
    })
    .catch((err) => {
        console.error("Erreur lors de la demande de permission :", err);
    });

    if (permission === "denied") {
        alert("Les notifications sont bloquées. Veuillez les autoriser dans les paramètres de votre navigateur pour continuer.");
    }
        
    document.getElementById("enableNotifications").addEventListener("click", () => {
        Notification.requestPermission().then((permission) => {
            if (permission === "granted") {
                console.log("Notifications activées.");
                // Appeler getToken ici
            } else {
                console.log("L'utilisateur a refusé les notifications.");
            }
        });
    });