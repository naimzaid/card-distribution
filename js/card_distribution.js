
    // send ajax request to card_distribution.php
    const form = $("#form");
    const result = $("#result");
    form.on("submit", function(e) {
      e.preventDefault();
      const numOfPeople = $("#numOfPeople").val();
      $.ajax({
        url: "card_distribution.php",
        type: "post",
        data: "numOfPeople=" + numOfPeople,
        success: function(data) {
          result.html(`
            <div class="card-distribution">
              ${data}
            </div>
          `);
        }
      });
    });
