<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/527f9e9424.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>My E-Bank</title>
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script>
    var txtLight =
      'Afin de renforcer la s\u00E9curit\u00E9 de l\u0027authentification, le code personnel n\u0027est plus saisi \u00E0 l\u0027aide du clavier, mais avec la souris. Les chiffres apparaissent de mani\u00E8re al\u00E9atoire sur la grille.';

    $('#infoPwdSaisieLoginSecure').popover({
      trigger: 'hover',
      content: txtLight,
      placement: 'auto',
      title: 'Information'
    });


    $('#inputUserSaisieLoginSecure').attr('autocomplete', 'off');
    $('#mdpAfficheSecure').attr('autocomplete', 'off');


    function add(index) {
      $('#mdp').val($('#mdp').val() + index);
      $('#mdpAfficheSecure').val($('#mdpAfficheSecure').val() + '*');
      return true;
    }
  </script>
</head>

<body class="d-main">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My E-Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <h3 class="text-light">Your Online Bank</h3>
    </div>
  </nav>

  <div class="row mt-5">
    <div class="col-xs-4 mx-auto">
      <div class="panel panel-default">
        <div class="panel-body text-center">
          <span class="ebkstyle2 bienvenuSur">
            Welcome To E-Bank</span>
        </div>
      </div>
      <div class="panel panel-default">

        <div class="panel-body">
          <form id="loginForm" method="post" action="user.php" onsubmit="return isFormValid(this);"><input type="hidden" name="codeLangueSelected" value="fr"><input type="hidden" name="mdp" value="" id="mdp"><input type="hidden" name="typeLogin" value="1">
            <div class="form-group ebkstyle18" id="titreSaisieLoginSecure">
              Secure Access To Your Personal Space</div>
            <div class="form-group">
              Type Your Username<input type="text" name="login" value="" id="inputUserSaisieLoginSecure" class="form-control" autocomplete="off"></div>
            Type Your Personal Code<div class="form-group" style="text-align: center">
              <table style="width: 100%;">
                <tbody>
                  <tr>
                    <td>
                      <input type="text" id="mdpAfficheSecure" name="mdpAfficheSecure" class="form-control" style="border: 1px solid #aaa" readonly="readonly" autocomplete="off">
                    </td>
                    <td style="text-align: center;">
                      <i class="fa fa-times iconLoginCancel" onclick="document.forms['loginForm'].mdpAfficheSecure.value=''; document.forms['loginForm'].mdp.value=''; return false;"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="tableauChiffres" style="margin: auto; margin-top: 3px;">
                <tbody>
                  <tr>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c0" onclick="return add(this.id.substr(1));">0</td>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c1" onclick="return add(this.id.substr(1));">7</td>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c2" onclick="return add(this.id.substr(1));">4</td>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c3" onclick="return add(this.id.substr(1));">9</td>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c4" onclick="return add(this.id.substr(1));">2</td>
                  </tr>
                  <tr>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c5" onclick="return add(this.id.substr(1));">5</td>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c6" onclick="return add(this.id.substr(1));">8</td>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c7" onclick="return add(this.id.substr(1));">3</td>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c8" onclick="return add(this.id.substr(1));">6</td>
                    <td class="chiffre btn-login btn btn-default" style="float: left" id="c9" onclick="return add(this.id.substr(1));">1</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group text-center">
              <input class="btn btn-primary col-xs-12 w-100" type="submit" value="Login">
            </div>
          </form>
        </div>
      </div>
      &nbsp;
    </div>
  </div>

</body>

</html>