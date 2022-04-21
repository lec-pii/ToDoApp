const openModal = document.querySelector("#open-Modal");
const closeModal = document.querySelector("#close-Modal");
const modal = document.querySelector(".modal-container");
const logout = document.querySelector('.logout');

const openM = () => {
  console.log("closed");
  modal.close();
};

openModal.addEventListener("click", () => {
  modal.classList.add("show");
});

closeModal.addEventListener("click", () => {
  modal.classList.remove("show");
});

logout.addEventListener("click",()=>{
    echo(" <?php logout(); ?> ");
})