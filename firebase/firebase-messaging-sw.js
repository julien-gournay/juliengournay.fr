// ! A METTRE EN RACINE
// Importez les bibliothèques Firebase nécessaires
importScripts('https://www.gstatic.com/firebasejs/9.0.0/firebase-app-compat.js');
importScripts('https://www.gstatic.com/firebasejs/9.0.0/firebase-messaging-compat.js');

// Configuration Firebase
const firebaseConfig = {
    apiKey: "AIzaSyBGEuBbl1wVxGKcJmx0IalP4ouX1sGTpqw",
    authDomain: "juliengournay-dbd79.firebaseapp.com",
    projectId: "juliengournay-dbd79",
    storageBucket: "juliengournay-dbd79.firebasestorage.app",
    messagingSenderId: "647579528890",
    appId: "1:647579528890:web:306ea7db2c211b2f675c83",
    measurementId: "G-4D7DGZD6D7"
};

// Initialisation Firebase dans le Service Worker
firebase.initializeApp(firebaseConfig);

// Initialisation de Firebase Messaging
const messaging = firebase.messaging();

// Gestion des messages en arrière-plan
messaging.onBackgroundMessage((payload) => {
    console.log('[Service Worker] Message reçu en arrière-plan :', payload);

    // Affichage de la notification
    const notificationTitle = payload.data.title;
    const notificationOptions = {
        body: payload.data.body,
        icon: payload.data.icon || '/default-icon.png', // Icône par défaut si aucune n'est fournie
    };

    self.registration.showNotification(notificationTitle, notificationOptions);
});
