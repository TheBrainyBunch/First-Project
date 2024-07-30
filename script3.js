// const chatBody= document.querySelector(".chat-body");
// const txt= document.querySelector("#txt");
// const send= document.querySelector(".send");
// const chatHeader = document.querySelector(".chat-header");
// const chat = document.querySelector(".chat");
// send.addEventListener("click", () => renderUserMessage());

// txt.addEventListener("keyup", (event) => {
//     if(event.keyCode === 13) {
//         renderUserMessage();
//     }
// });

// chatHeader.addEventListener("click", ()=>{
//     chat.classList.toggle("collapse");
// });

// const renderUserMessage = ( ) => {
//     const userInput = txt.value;
//     renderMessageEle(userInput, "user");
//     txt.value = "";
//     setTimeout(() => {
//     renderChatbotResponse(userInput);
//      setScrollPosition();
//     },600);
// };

// const renderChatbotResponse = (userInput) => {
//     const res = getChatbotResponse(userInput);
//     renderMessageEle(res);
// };

// const renderMessageEle =(txt1, type) =>{
//     let className = "user-message";
//     if(type !== "user"){
//         className = "chatbot-message";
//     }
//     const messageEle = document.createElement("div");
//     const txtNode = document.createTextNode(txt1);
//     messageEle.classList.add("user-message");
//     messageEle.append(txtNode);
//     chatBody.append(messageEle);
// };

// const getChatbotResponse = (userInput) => {
//     return responseOdj[userInput]==undefined
//    ? "How ! may i help you?"
//      : responseOdj[userInput];
// };

// const setScrollPosition = ()=>{
//     if(chatBody.scrollHeight>0){
//         chatBody.scrollTop=chatBody.scrollHeight;
//     }
// };
