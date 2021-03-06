const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const message = document.getElementById("message");
const output = document.getElementById("result");
const image1 = document.getElementById("image1");

startRecognition = () => { 
  if (SpeechRecognition !== undefined) { // test if speechrecognitio is supported
    let recognition = new SpeechRecognition();
    recognition.lang = 'en-US'; // which language is used?
    recognition.interimResults = false; // https://developer.mozilla.org/en-US/docs/Web/API/SpeechRecognition/interimResults
    recognition.continuous = false; // https://developer.mozilla.org/en-US/docs/Web/API/SpeechRecognition/continuous
   
    recognition.onstart = () => {
      message.innerHTML = `Starting listening, speak in the microphone please<br>Say "help me" for help`;
      output.classList.add("hide"); // hide the output
    };

    recognition.onspeechend = () => {
      message.innerHTML = `I stopped listening `;
      recognition.stop();
    };

    recognition.onresult = (result) => {
      let transcript = result.results[0][0].transcript;
      let confidenceTranscript= Math.floor(result.results[0][0].confidence * 100); // calc. 'confidence'
      output.classList.remove("hide"); // show the output
      output.innerHTML = `I'm ${confidenceTranscript}% certain you just said: <b>${transcript}</b>`;
      actionSpeech(transcript);
    };

    recognition.start();
  } 
  else {  // speechrecognition is not supported
    message.innerHTML = "sorry speech to text is not supported in this browser";
  }
};

// process speech results
actionSpeech = (speechText) => {
  speechText = speechText.toLowerCase().trim(); // trim spaces + to lower case
  console.log(speechText); // debug 
  switch(speechText){ 
    // switch evaluates using stric comparison, ===
<<<<<<< HEAD
    case "backend":
      window.open("backend.html", "_self")
      break;
    case  "frontend":
      window.open("web-developer.html", "_self")
      break;
    case "design": // let op, "fall-through"
      window.open("logo-design.html", "_self")
=======
    case "back end":
      window.open("backend.html", "_self")
      break;
    case  "front end":
      window.open("web-developer.html", "_self")
      break;
    case "design": // let op, "fall-through"
      window.open("illustration.html", "_self")
>>>>>>> 915bde1d16a9cfff919dd9bf8f76927d75aee43c
      break;
    case "top":
      window.open("#header", "_self");
      break;
    case "data":
      window.open("data-entry.html", "_self");
      break;  
    case "help me":
      alert("Valid speech commands: frontend,  backend, design, top, help me");
      break;
    default:
      // do nothing yet
  }
}