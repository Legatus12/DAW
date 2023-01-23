// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-app.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
import {
  getFirestore,
  collection,
  getDocs,
  onSnapshot,
  addDoc,
  deleteDoc,
  doc,
  getDoc,
  updateDoc,
} from "https://www.gstatic.com/firebasejs/9.6.2/firebase-firestore.js";

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyCPT7Fu_3pwFNsAJ4NBLLvpgApvv0IoaEU",
    authDomain: "test-ddd89.firebaseapp.com",
    projectId: "test-ddd89",
    storageBucket: "test-ddd89.appspot.com",
    messagingSenderId: "698250421716",
    appId: "1:698250421716:web:f1d58a9dd606e83f65e241",
    measurementId: "G-FZV39SN6H4"
};

//Conectamos con la base de datos
const app = initializeApp(firebaseConfig);
const db = getFirestore()
//CRUD