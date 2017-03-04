<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.03.17
 * Time: 21:25
 */

function get_comment_form($path, $action = 'new', $comment = null)
{
    return '<form method="post" action="' . $path . '" class="form-horizontal col-md-6 col-md-offset-3">
            <h2>' . (($action == 'edit') ? "Редактируем $comment->id" : 'Добавить новый') . '</h2>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Описание</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description"
                              placeholder="Содержание...">' . ($comment ? $comment->content : null ) . '</textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="' . (($action == 'new') ? 'SAVE' : 'UPDATE') . '"/>
        </form>';
}
