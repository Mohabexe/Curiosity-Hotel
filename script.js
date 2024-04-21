const handleOnMouseMove = (e) => {
  const { currentTarget: target } = e

  const rect = target.getBoundingClientRect(),
    x = e.clientX - rect.left,
    y = e.clientY - rect.top

  target.style.setProperty("--mouse-x", `${x}px`)
  target.style.setProperty("--mouse-y", `${y}px`)
}

for (const card of document.querySelectorAll(".card")) {
  card.onmousemove = (e) => handleOnMouseMove(e)
}
for (const card of document.querySelectorAll(".teamCard")) {
  card.onmousemove = (e) => handleOnMouseMove(e)
}

// FAQ

const faqs = document.querySelectorAll(".faqCard")

faqs.forEach((faq) => {
  faq.addEventListener("click", () => {
    faq.classList.toggle("active")
  })
})
