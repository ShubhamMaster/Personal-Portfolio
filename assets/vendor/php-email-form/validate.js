document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".php-email-form");
  const successAlert = document.getElementById("success");
  const failedAlert = document.getElementById("failed");
  const bufferDiv = document.getElementById("buffer"); // Buffer animation div

  if (form) {
      form.addEventListener("submit", function (event) {
          event.preventDefault(); // Prevent form submission

          const formData = new FormData(form);
          bufferDiv.classList.remove("d-none"); // Show buffer animation

          function sendRequest(retryCount = 3) {
              fetch(form.action, {
                  method: form.method,
                  body: formData
              })
              .then(response => response.text())
              .then(data => {
                  console.log("Server Response:", data);
                  bufferDiv.classList.add("d-none"); // Hide buffer animation

                  try {
                      const jsonResponse = JSON.parse(data);

                      if (jsonResponse.status === "success") {
                          successAlert.textContent = jsonResponse.message;
                          successAlert.classList.remove("d-none");
                          setTimeout(() => successAlert.classList.add("d-none"), 5000);
                          form.reset(); // Clear form fields after success
                      } else {
                          failedAlert.textContent = jsonResponse.message || "Message sending failed.";
                          failedAlert.classList.remove("d-none");
                          setTimeout(() => failedAlert.classList.add("d-none"), 5000);

                          if (retryCount > 0) {
                              console.log("Retrying... Attempts left:", retryCount);
                              sendRequest(retryCount - 1); // Retry submission
                          }
                      }
                  } catch (error) {
                      failedAlert.textContent = "Invalid server response.";
                      failedAlert.classList.remove("d-none");
                      setTimeout(() => failedAlert.classList.add("d-none"), 5000);
                  }
              })
              .catch(error => {
                  console.error("Fetch Error:", error);
                  bufferDiv.classList.add("d-none"); // Hide buffer animation

                  failedAlert.textContent = "Error occurred while submitting the form.";
                  failedAlert.classList.remove("d-none");
                  setTimeout(() => failedAlert.classList.add("d-none"), 5000);

                  if (retryCount > 0) {
                      console.log("Retrying... Attempts left:", retryCount);
                      sendRequest(retryCount - 1); // Retry submission
                  }
              });
          }

          sendRequest(); // Initial request
      });
  }
});
