<!-- 
######################################################################
#                                                                    #
#  Please refer to the "README.md" file provided in the GitHub      #
#  repository before continuing. This file contains important       #
#  information and instructions that will help you get started.      #
#                                                                    #
#  Total time taken to finish the project is estimated to be        #
#  3-4 hours.                                                        #
#                                                                    #
######################################################################
-->



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Playing Card Distribution</title>
    <link rel="stylesheet" type="text/css" href="/css/pico.min.css">
    <script defer src="js/card_distribution.js"></script> 
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Playing Card Distribution</h1>
      <form id="form">
        <div class="form-group">
          <label for="numOfPeople">Number of People:</label>
          <input type="number" class="form-control" id="numOfPeople" required>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
      </form>
      <div id="result" class="text-center mt-3">
      </div>
    </div>
    
    <style>
      .card-distribution {
        font-family: "Inconsolata", monospace;
        font-size: 16px;
        background-color: #333;
        color: #eee;
        padding: 20px;
        line-height: 2.5;
      }
    </style>
  </body>
</html>
