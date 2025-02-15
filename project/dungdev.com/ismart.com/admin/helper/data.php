<?php

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

function has_child($data, $cat_id)
{
    foreach ($data as $v) {
        if ($v['parent_id'] == $cat_id)
            return true;
    }
    return false;
}

function data_tree($data, $parent_id = 0, $level = 0)
{
    $result = array();
    foreach ($data as $v) {
        if ($v['parent_id'] == $parent_id) {
            $v['level'] = $level;
            $result[] = $v;
            if (has_child($data, $v['id'])) {
                $result_child = data_tree($data, $v['id'], $level + 1);
                $result = array_merge($result, $result_child);
            }
        }
    }
    return $result;
}