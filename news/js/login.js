const login_form = document.querySelector(`#login_form`);
const message = document.querySelector(`#message`);

async function login_form_send_request(params) {
    params.preventDefault();
    message.innerHTML = "";
    const form_data = new FormData(login_form);
    try {
      const response = await fetch(`?action=run_login`, {
        method: "POST",
        body: form_data,
      });

      const result = await response.json();

      if (result.success) {
        window.location.href = "index.php";
      } else {
        message.innerHTML = result.message;
      }
    } catch (error) { console.log(error) }
}

login_form.addEventListener("submit", login_form_send_request);