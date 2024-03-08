<div class="container">
    <div class="row">
        <div class="col-4">
            <form action="index.php" methods="GET" class="d-flex column-gap-2 mb-4">
                <select name="filter" id="filter" class="p-1 form-select ">
                    <option value="<?= $filter ?>" selected hidden><?= selectText($filter)?></option>
                    <option value="all">Tutti i prodotti</option>
                    <option value="dog">Prodotti per cani</option>
                    <option value="cat">Prodotti per gatti</option>
                </select>
                <button type="submit" class="btn btn-primary">Filtra</button>
            </form>
        </div>
    </div>
</div>