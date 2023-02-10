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
    <a class="navbar-brand" href="index.php">My E-Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
      <h3 class="text-light">Your Online Bank</h3>
    </div>
  </nav>

  <div class="subcontainer" style="display: block;">
    <div class="row rowTitre">
      <div class="ebkstyle16 col-xs-10" id="impr_titre">
        <i class="fa icon-comptes"></i>
        &nbsp;
        Liste des comptes
      </div>
      <div class="col-xs-2">
        <div class="pull-right flip">
          <a class="ebkstyle16" id="WP_Param" href="/ebanking/personnalisationComptes.ebk">
            <i class="icon-parametres media-middle" data-toggle="tooltip" title="" data-original-title="Personnalisation"></i>
          </a>
          <a class="ebkstyle16" id="NWP_Print" href="javascript:void(0)" onclick="beforePrint(); imprimer(); return false;">
            &nbsp;
            <i class="fa icon-imprimer media-middle" data-toggle="tooltip" title="" data-original-title="Imprimer"></i>
          </a>
        </div>
      </div>
    </div>
    <div id="impr_corps" style="display: none"></div>
    <form id="listeComptesForm" method="post" action="/ebanking/listeComptesPost.ebk">
      <div id="categories-comptes">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="categorie-compte-0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
              <div class="col-xs-12 f5">
                <div class="pull-right flip"></div>
                <table class="table table-striped table-hover dataTable no-footer" style="width: 100%;" id="categorie-compte-0" role="grid">
                  <thead>
                    <tr role="row">
                      <th class="sorting_disabled text-left" rowspan="1" colspan="1" style="width: 372px;">Numéro de
                        compte</th>
                      <th class="sorting_disabled text-left" rowspan="1" colspan="1" style="width: 503px;">Intitulé du
                        compte</th>
                      <th class="sorting_disabled text-right" rowspan="1" colspan="1" style="width: 244px;">Solde actuel
                        en devise du compte</th>
                      <th class="sorting_disabled text-right" rowspan="1" colspan="1" style="width: 244px;">Montant
                        disponible en devise du compte</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr role="row" class="odd">
                      <td class="col-xs-3 text-left"><a href="/ebanking/detailsCompte.ebk?XoLZcw%2Bo13D663pkdRTTtg%3D%3D=48xWyFEHf1w%3D&amp;J8mSMlY8u5I%2BSokg6P0cRw%3D%3D=48xWyFEHf1w%3D&amp;TOxvvb%2F5yexYSp9oC5qQ9g%3D%3D=l%2B%2FmG45iW0vjzFbIUQd%2FXA%3D%3D&amp;ahQ4kKFM2MjFTNtpnnyNDA%3D%3D=Lxvi90vKeio%3D&amp;7uv3QWSK09o%2BSokg6P0cRw%3D%3D=48xWyFEHf1w%3D&amp;kqcVpjppLJD6eETRIXxZrw%3D%3D=put8sQNZxIQ%3D&amp;%2FUG%2BqhusBmSsEQefO3c7VA%3D%3D=N%2BDeTGKBJ1s%3D&amp;hC3bqVL%2Fikkzsqf9AfShiA%3D%3D=6t3kdRZTdqsO3JP5D%2FiLSQ%3D%3D&amp;qyY%2B%2FEvBSk4mTyNaY5f4GQ%3D%3D=s4h5h51xO%2BM%3D" class="ebkstyle18" onmouseover="createTooltipAndHide(this, 'D\u00E9tails du compte')">00021-0056149149-9 TND</a>
                      </td>
                      <td class="col-xs-4 text-left">LAHDHIRI HOUSSEM BEN MOHAMED<a href="/ebanking/listeMouvements.ebk?Git6C88m36k%3D=kg1wrtUXmKY%2FWsXhXaAgP%2FmdJYLpUvExT0rRxnWAoMvc7htWmXU12J5N2Q7%2BXO%2BaMGkR0Y2ST1YFW7I%2BVXbi7uDyes%2F4SCtMnN6QmCr45GHjzFbIUQd%2FXA%3D%3D&amp;n8Iaq9%2B2LpA%3D=yA67G7%2FbvcHP658FrcMykhXVXT8lrxOTwgLltmNBiixhS9RF%2FqkARsM7VLm6JYlXawnioxo5m%2B0%3D&amp;aHaV5hzcSmA%3D=l%2B%2FmG45iW0vjzFbIUQd%2FXA%3D%3D&amp;7jMbCxcinZHjzFbIUQd%2FXA%3D%3D=aSVVxL1sdL8%3D" style="float:right">
                          <div id="WP_0" title="" data-toggle="tooltip" data-placement="top" data-original-title="Ecritures">
                            <i class="fa icon-comptes"></i>
                          </div>
                        </a></td>
                      <td class="col-xs-2 gras text-right flip text-right">-1,356</td>
                      <td class="col-xs-2 gras text-right flip text-right">0,000</td>
                    </tr>
                  </tbody>
                </table>
                <div class="msgIndicatif"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>



</body>

</html>