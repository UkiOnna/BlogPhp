{include file="Admin/Blocks/Header.tpl"}

<div class="container">
    <div class="mb-3 text-right">
        <a href="/admin/categories/create" class="btn btn-success">Create category</a>
    </div>
    {foreach $categories as $category}

        <div class="card card-body mb-3 d-flex flex-row allign-content-start justify-content-start">
            <div>
                <div class="mb-1">
                    <h3><a href="/admin/categories/{$category.id}"></a> {$category.name}</h3></div>
            </div>
            <div class="btn-group btn-group-sm ml-auto mb-auto">
                <a href="/admin/categories/update/{$category.id}" class="btn btn-secondary">
                    Change
                </a>

                <a href="/admin/categories/delete/{$category.id}" class="btn btn-danger">
                    Delete
                </a>
            </div>
        </div>
    {/foreach}
    {if $pages > 1}
        <div class="d_flex align-items-center justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item {if $current_page - 1 < 1}disabled{/if}">
                        <a class="page-link"  href="/page/{$current_page - 1}">Back</a>
                    </li>
                    {for $i = 1; $i <= $pages; $i++}
                        <li class="page-item {if $i == $current_page}disabled{/if}">
                            <a class="page-link"  href="/page/{$i}">{$i}</a>
                        </li>
                    {/for}
                    <li class="page-item {if $current_page + 1 > $pages}disabled{/if}">
                        <a class="page-link"  href="/page/{$current_page + 1}">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    {/if}
</div>
{include file="global/footer.tpl"}