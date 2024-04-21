// book.php form

const form = document.querySelector("#form")

const Name = document.querySelector("#name")
const checkin = document.querySelector("#checkin")
const checkout = document.querySelector("#checkout")
const adults = document.querySelector("#adults")
const number = document.querySelector("#number")
const email = document.querySelector("#email")

// Show Errors

const errContainer = document.querySelector(".errors")
const errList = document.querySelector(".errors-list")

form.addEventListener("submit", (e) => {
  const errMsgs = []
  clearErrors()

  if (Name.value === "" || Name.value == null) {
    errMsgs.push("Name is required")
  }
  if (Name.value.length < 3) {
    errMsgs.push("Name must be atleast 3 characters")
  }
  if (checkin.value === "" || checkin.value == null) {
    errMsgs.push("Check-in date is required")
  }
  if (checkout.value === "" || checkout.value == null) {
    errMsgs.push("Check-out date is required")
  }
  if (adults.value === "" || adults.value == null) {
    errMsgs.push("Number of adults is required")
  }
  if (number.value === "" || number.value == null) {
    errMsgs.push("Contact number is required")
  }
  if (email.value === "" || email.value == null) {
    errMsgs.push("Email is required")
  } else {
    let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/
    if (!emailRegex.test(email.value)) {
      errMsgs.push("Email is not valid")
    }
  }
  if (errMsgs.length > 0) {
    e.preventDefault()
    showErrors(errMsgs)
  }

  console.log(errMsgs)
})

function clearErrors() {
  errList.innerHTML = ""
}

function showErrors(errMsgs) {
  errMsgs.forEach((errMsg) => {
    const li = document.createElement("li")
    li.innerText = errMsg
    errList.appendChild(li)
  })
  errContainer.classList.add("show")
}
