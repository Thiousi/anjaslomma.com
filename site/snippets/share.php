<ul class="list-inline text-right">
    <li>Share on:</li>
    <li>
        <a href="https://www.facebook.com/sharer.php?u=<?php echo html($page->url()) ?>&t=Share%20on%20Facebook" target="_blank" title="Facebook">
            <i class="fa fa-facebook-official fa-lg"></i>
        </a>
    </li>
    <li>
        <a href="https://plus.google.com/share?url=<?php echo html($page->url()) ?>" target="_blank" title="Google+">
            <i class="fa fa-google-plus-square fa-lg"></i>
        </a>
    </li>
    <li>
        <a href="http://www.tumblr.com/share/link?url=<?php echo html($page->url()) ?>&amp;name=<?php echo $page->title() ?>" target="_blank" title="Tumblr">
            <i class="fa fa-tumblr-square fa-lg"></i>
        </a>
    </li>
    <li>
        <a href="http://twitter.com/intent/tweet?source=sharethiscom&text=Share%20on%20Twitter&url=<?php echo html($page->url()) ?>" target="_blank" title="Twitter">
            <i class="fa fa-twitter-square fa-lg"></i>
        </a>
    </li>
</ul>
