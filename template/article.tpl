

          <div class="span8">
			<div class="badge">

            
			<h2>{$action_label} un article</h2>
			
			<form method="post" action="article.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="{$data['id_article']}" style="border:solid 1px black; ">
			<dd>Titre:</dd>
			<dd><input type="text" name="titre" value="{$data['titre']}" style="border:solid 1px black; "></dd>
			
			<dd>Texte:</dd>			
			<dd><textarea name="texte" cols="50" rows="5" style="border:solid 1px black; ">{$data['texte']}</textarea></dd>
			
			<dd>Image:</dd>			
			<dd><input type="file" name="image"></dd>
			
			<dd>Publié:</dd>
			<dd><input type="checkbox" name="statut"{if $data['statut']==1}checked {/if}} value="1"></dd>
			
			<br><br>
			
			<dd><input href="index.php" type="submit" name={$action_label} value={$action_label} class="btn btn-large btn-primary" ></dd>
			
			
			<!-- Fin texte -->
			</div>
          </div>

		  