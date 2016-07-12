<div class="navigation--list-wrapper">
    <ul class="navigation--list container" role="menubar" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
        {strip}
            {block name='frontend_index_navigation_categories_top_home'}
                <li class="navigation--entry{if $sCategoryCurrent == $sCategoryStart && $Controller == 'index'} is--active{/if} is--home" role="menuitem">
                    <a class="navigation--link is--first{if $sCategoryCurrent == $sCategoryStart && $Controller == 'index'} active{/if}" href="{url controller='index'}" title="{s name='IndexLinkHome' namespace="frontend/index/categories_top"}{/s}" itemprop="url">
                        <span itemprop="name">{s name='IndexLinkHome' namespace="frontend/index/categories_top"}{/s}</span>
                    </a>
                </li>
            {/block}

            {block name='frontend_index_navigation_categories_top_before'}{/block}

            {foreach $sMainCategories as $sCategory}
                {block name='frontend_index_navigation_categories_top_entry'}
                    {if !$sCategory.hidetop}
                        <li class="navigation--entry{if $sCategory.flag} is--active{/if}" role="menuitem">
                            <a class="navigation--link{if $sCategory.flag} is--active{/if}" href="{$sCategory.link}" title="{$sCategory.description}" itemprop="url">
                                <span itemprop="name">{$sCategory.description}</span>
                            </a>
                        </li>
                    {/if}
                {/block}
            {/foreach}

            {block name='frontend_index_navigation_categories_top_after'}{/block}
        {/strip}
    </ul>
</div>