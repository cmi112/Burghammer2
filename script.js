mixitup('#mix-wrapper', {
    load: {
      sort: 'order:asc'
    },
    animation: {
      effects: 'fade rotateZ(-180deg)',
      duration: 700
    },
    classNames: {
      block: 'category',
      elementFilter: 'filter-btn',
      elementSort: 'sort-btn'
    },
  });


  var slider = tns({
    container: '.my-slider',
      items: 1,
      autoplay: false,
    navContainer: "#customize-thumbnails",
    navAsThumbnails: true,
  });


