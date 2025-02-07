<php?

return function () {
    return page('designs')->children()->listed()->filterBy('intendedTemplate', 'item');
};
