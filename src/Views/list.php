<?php
    $bugs = $parameters['bugs'];
    
?>

<style>
    
    h1{
        font-size: 30px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
        margin-bottom: 15px;
    }
    table{
        width:100%;
        table-layout: fixed;
    }
    .tbl-header{
        background-color: rgba(255,255,255,0.3);
    }
    .tbl-content{
        overflow-x:auto;
        margin-top: 0px;
        border: 1px solid rgba(255,255,255,0.3);
    }
    th{
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: #fff;
        text-transform: uppercase;
    }
    td{
        padding: 15px;
        text-align: left;
        vertical-align:middle;
        font-weight: 300;
        font-size: 12px;
        color: #fff;
        border-bottom: solid 1px rgba(255,255,255,0.1);
    }
    
    
    body{
        background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
        background: linear-gradient(90deg, rgba(107,139,145,1) 0%, rgba(78,200,223,1) 68%, rgba(151,213,226,0.8883928571428571) 100%);
        font-family: 'Roboto', sans-serif;
        
    }
    section{
        margin: 50px;
    }
    
</style>
<meta charset="UTF-8">
<html>
    <head>
        
        
    </head>
    <body>
        
        <section>
            <h1>Liste de bugs</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Intitulé</th>
                            <th>Description</th>
                            <th>Nom de domaine</th>
                            <th>Adresse IP</th>
                            <th>Date</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody id="table-bugs">
                        
                    <?php foreach ($bugs as $bug) { ?>

                            <tr id="<?php echo $bug->getId()?>">
                                <td>
                                    <a class="trigger2" href="show/<?php echo $bug->getId() ?>"><?php echo $bug->getTitle(); ?></a>
                                </td>
                                <td><?php echo $bug->getDescription()?></td>
                                <td><?php echo $bug->getCreatedAt()?></td>
                                <td><?php echo $bug->getNdd()?></td>
                                <td><?php echo $bug->getIp()?></td>
                                <td class="statut">
                                    <?php
                                    if ($bug->getClosed() == 1) {
                                        echo "<span>Résolu</span>";
                                    } else {
                                        echo "<a class='trigger' href='#'><span>Non résolu</span></a>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php }
                    ?>
                    </tbody>
                </table>
            </div>
            <form method="GET" action="add"><input type="submit" value="Ajouter un bug"></form>
            <input type="checkbox" name="checkbox" id="checkbox"><label>Bugs non résolus</label>
           
        </section>
        <script type="text/javascript" src="../src/Resources/ajax.js"></script>
    </body>
</html>

<script>
    
    document.getElementById('checkbox').addEventListener('change', (event) => {
        var tableContent=(document.getElementById('table-bugs')).querySelectorAll('td.statut');
        if (event.target.checked) {
            
            tableContent.forEach(function(elem){
                if (elem.querySelector('span').innerHTML==='Résolu'){
                    elem.parentNode.style.display='none';
                }
            });
        } else {
            tableContent.forEach(function(elem){
                if (elem.querySelector('span').innerHTML==='Résolu'){
                    elem.parentNode.style.display='';
                }
            });
        }
    })
    
</script>