<?php

include_once __DIR__ . "/../Model/Category.php";

class CategoryService
{
    const GROUP_ID = 1;

    public static function getGroups()
    {
        return (new Category())->getByGroupsIds([self::GROUP_ID]);
    }

    public static function getCategoriesForSidebar()
    {
        return (new Category())->getWithoutGroupsIds([self::GROUP_ID]);
    }
}