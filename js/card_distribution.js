
      const form = document.getElementById("form");
      const result = document.getElementById("result");
      form.addEventListener("submit", function(e) {
        e.preventDefault();
        const numOfPeople = document.getElementById("numOfPeople").value;
        if (!numOfPeople) {
          result.innerHTML = "Input value does not exist or value is invalid";
          return;
        }
        if (numOfPeople < 0) {
          result.innerHTML = "Input value does not exist or value is invalid";
          return;
        }
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "card_distribution.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            result.innerHTML = `
              <div class="card-distribution">
                ${xhr.responseText}
              </div>
            `;
          }
        };
        xhr.send("numOfPeople=" + numOfPeople);
      });