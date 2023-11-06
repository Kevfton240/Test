{extends file='page.tpl'}

{block name='page_content'}

  <h1>{$l s='Gestion des Avis Produits' d='Admin.Kjmoduleavisproduit.Admin'}</h1>

  {if $formError}
    <div class="alert alert-danger">{$formError|escape:'html':'UTF-8'}</div>
  {/if}

  {if $confirmation}
    <div class="alert alert-success">{$confirmation|escape:'html':'UTF-8'}</div>
  {/if}

  {if $warning}
    <div class="alert alert-warning">{$warning|escape:'html':'UTF-8'}</div>
  {/if}

  <form action="{$request_uri}" method="post">
    <div class="form-group">
      <label for="id_produit">ID Produit</label>
      <input type="text" id="id_produit" name="id_produit" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="auteur">Auteur</label>
      <input type="text" id="auteur" name="auteur" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="commentaire">Commentaire</label>
      <textarea id="commentaire" name="commentaire" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter Avis</button>
  </form>
  
  {if $avisProduits}
    <h2>{$l s='Liste des Avis Produits' d='Admin.Kjmoduleavisproduit.Admin'}</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>ID Produit</th>
          <th>Auteur</th>
          <th>Commentaire</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$avisProduits item=avisProduit}
          <tr>
            <td>{$avisProduit.id_avis_produit}</td>
            <td>{$avisProduit.id_produit}</td>
            <td>{$avisProduit.auteur}</td>
            <td>{$avisProduit.commentaire}</td>
          </tr>
        {/foreach}
      </tbody>
    </table>
  {/if}

{/block}
