
<form class="search-form m-0" action="<?php echo home_url('/') ?>" method="get">
    <span class="bg-white">
        <input type="text" placeholder="Поиск..." value="<?php echo get_search_query() ?>" name="s" id="s"><button type="submit">НАЙТИ</button>
    </span>
</form>