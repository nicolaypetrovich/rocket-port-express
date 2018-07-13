<div class="box-bl">
    <form>
        <div class="box-item">
            <div class="box-item-repeat">
                <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i></button>
                <div class="box-img">
                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                    <div class="s-boxbtn">
                        <button type="button" class="btn btn-block btn-success">Загрузить</button>
                        <button type="button" class="btn btn-block btn-danger">Удалить</button>
                        <button type="button" class="btn btn-block bg-purple">Изменить</button>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-plus" data-widget="collapse">Добавить</button>
        </div>
        <div class="box-item">
            <div class="box-textarea">
                <textarea class="form-control" placeholder="Введите текст" name="content" >
                    <?=json_decode($page->content);?>
                </textarea>
            </div>
        </div>
        <div class="box-item">
            <div class="box-video">
                <input type="text" name="video" placeholder="Введите url видео">
                <div class="timeline-item">
                    <div class="timeline-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs"
                                    frameborder="0" allowfullscreen="" height="400"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>
    </form>
</div>