<div class="col-lg-9">
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
			<?php
				foreach($contents->result() as $video){
					echo '<div class="col-lg-3">';
					echo '<div class="well">';
					echo '<img width="180" height="180" src="http://dcms.io/cdn/images/content-thumbnail/'.$video->thumbnail.'" /><br />';
					echo '<a href="/video/view/'.$video->content_id.'">'.$video->content_name.'</a>';
					echo '<span id="'.$video->content_id.'" class="glyphicon glyphicon-trash" onclick="delete_creator_content(this, \'video\')"></span>';
					echo '<button id="'.$video->content_id.'" data-toggle="modal" data-target="#edit-modal" class="edit btn btn-link" onclick="edit_creator_content(this, \'video\', \'modal\')">
							<span class="glyphicon glyphicon-edit"></span></button>';
					echo '</div></div>';
				}
			?>
			</div>
			<div class="col-lg-offset-5 col-lg-2">
				<a type="button" class="btn btn-default" href="/creator/video/upload">
					<span class="glyphicon glyphicon-upload"></span>
					upload video
				</a>
			</div>
		</div>
	</div>
</div>
</div>