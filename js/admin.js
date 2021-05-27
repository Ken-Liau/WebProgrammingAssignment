var toggle = document.getElementById("toggle");

//button
var promotion = document.getElementById("promotion");
var discount = document.getElementById("discount");
var event = document.getElementById("event");

//form
var promotionForm = document.getElementById("promotion-form");
var discountForm = document.getElementById("discount-form");
var eventForm = document.getElementById("event-form");

promotion.addEventListener("click", function(){
    toggle.style.left = "1%";
    promotionForm.style.display = "flex";
    discountForm.style.display = "none";
    eventForm.style.display = "none";
})
discount.addEventListener("click", function(){
    toggle.style.left = "37%";
    promotionForm.style.display = "none";
    discountForm.style.display = "flex";
    eventForm.style.display = "none";
})
event.addEventListener("click", function(){
    toggle.style.left = "69%";
    promotionForm.style.display = "none";
    discountForm.style.display = "none";
    eventForm.style.display = "flex";
})