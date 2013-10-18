<div class="container about">
		
		<h2>API Documentation</h2>
		<p>If you'd like to add the bloogity blogroll to your websites or mobile apps then you've come to the right place.</p>
		
		<p><b>Our API is extremely easy to use.</b> Even your two year old niece could implement it.

		<br />Here's the code you'll need to pull back an article, title, author, and created date. <i>Posts(article) are here shown truncated for convenience.</i> This API pulls back the full post.</p>
		<xmp>
		$rss = simplexml_load_file('api/bloggityposts.xml');
		
		foreach($rss->post as $p){ 
			$title = $p->title;
			$created = $p->created;
			$author = $p->username;
			$article = $p->article;
			
			echo "<h2>".$title."</h2>";
			echo "<p>".$created."</p>";
			echo "<p>".$author."</p>";
			echo "<p>".$article."</p>";
		} 

	</xmp>

<h2>And here's the result...</h2>
		<div class="feed">

	<?php
		$rss = simplexml_load_file('api/posts.xml');
		$counter = 0;
		foreach($rss->post as $p){ 
			$title = $p->title;
			$created = $p->created;
			$author = $p->username;
			$article = $p->article;

			$summary = substr($article,0,400);
			
			echo "<h2>".$title."</h2>";
			echo "<p>".$created."</p>";
			echo "<p>".$author."</p>";
			echo "<p>".$summary."...</p>";

			$counter++;
			//shows 3 posts for this example
			if($counter >= 3){
				break;
			}
		} 

	?>
		</div><!-- feed-->
	</div><!-- /.container-->