
  <!-- headerの読込 -->
  <?php get_header(); ?>

<div id="wrapper">
	<div class="container-fuled">



		<article>


      <!-- 編集内容を表示 -->
      <?php if(have_posts()): while(have_posts()): the_post();?>

      <?php the_content(); ?>

      <?php endwhile; endif; ?>
      <!-- 編集内容を表示 -->



			<h1>Sample</h1>
			<section id="article1">
				<h2>なつかしくってあったかい、きりぎりす。</h2>
				<figure>
					<img src="//lopan.jp/wp/wp-content/uploads/2014/01/title.png">
					<figcaption>フォント好きな人がフォントについて熱く語る「LOVEFONT」という企画にあと乗りで、僕の好きなフォント「きりぎりす」について、語るってほどは語れませんが、記事にさせていただきます。<a href="#" class="btn">この記事を読む</a></figcaption>
				</figure>
			</section>

			<section id="article2">
				<h2>透明ノイズと紙テクスチャ。</h2>
				<figure>
					<img src="//lopan.jp/wp/wp-content/uploads/2013/09/title.jpg">
					<figcaption>ちょっとざらざらした質感とか、手触りを感じるテクスチャって、背景にさりげなく敷くだけで、ほんのり暖かみが出ていいですよね。そんなざらざらノイズ画像を半透明にした「透明ノイズ」のつくり方についてまとめてみました。<a href="#" class="btn">この記事を読む</a></figcaption>
				</figure>
			</section>

			<section id="article3">
				<h2>Webサイトの作り方のまとめ！ブラウザチェック。</h2>
				<figure>
					<img src="//lopan.jp/wp/wp-content/uploads/2013/06/title.jpg">
					<figcaption>トップページのコーディングがひと通り完了したので、下層ページのコーディングに移る前に、一旦ブラウザチェックしてみようと思います:)。ブラウザチェックからIEでの表示崩れを整えるまでのまとめです。<a href="#" class="btn">この記事を読む</a></figcaption>
				</figure>
			</section>

			<section id="article4">
				<h2>Photoshopのシェイプでできること。</h2>
				<figure>
					<img src="//lopan.jp/wp/wp-content/uploads/2013/03/title.jpg">
					<figcaption>拡大しても劣化しないし、ダブルクリックでカンタンに色を変えられるし、もちろんIllustratorでも使い回せる、そんなPhotoshopの万能シェイプの機能や特長について、個人的なまとめです。<a href="#" class="btn">この記事を読む</a></figcaption>
				</figure>
			</section>

			<section id="article5">
				<h2>CSSだけでスライドショーはつくれるよ。</h2>
				<figure>
					<img src="//lopan.jp/wp/wp-content/uploads/2012/12/title.jpg">
					<figcaption>CSS Programming Advent Calendar 2012、22日目のための記事です。前回の記事で作った、グローバルナビの下の大きめの画像のところを、CSSだけで実装してみました。<a href="#" class="btn">この記事を読む</a></figcaption>
				</figure>
			</section>
		</article>
  </div>
</div>

<!-- 編集内容を表示 -->
<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>
<!-- 編集内容を表示 -->



    <?php get_footer(); ?>
