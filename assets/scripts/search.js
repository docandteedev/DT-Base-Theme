import Rx from 'rx'
import $ from 'jquery'

const initSearch = () => {
    // Page Search
    $('.search-form').each(() => {
        // Search Wordpress for a given term
        const searchWordpress = (term, postType) => {
            return $.ajax({
                url: `http://localhost/wp-json/swp_api/search?&s=${term}`,
                dataType: 'json'
            }).promise()
        }

        const main = () => {
            const $input = $(this).find('.search-field')
            const $searchBox = $(this).find('.search-results')
            const $results = $(this).find('.search-results-list')

            const focusin = Rx.Observable.fromEvent($input, 'focusin')
            focusin.subscribe(() => {
                $searchBox.fadeIn()
            })

            const focusout = Rx.Observable.fromEvent($input, 'focusout')
            focusout.subscribe(() => {
                $searchBox.fadeOut()
            })

            // Get all distinct key up events from the input and only fire if long enough and distinct
            const keyup = Rx.Observable.fromEvent($input, 'keyup')
                .map(e => e.target.value)
                .filter(text => {
                    if (text.length === 0) {
                        $searchBox.fadeOut()
                    }
                    return text.length > 2 // Only if the text is longer than 2 characters
                })
                .debounce(750 /* Pause for 750ms */)
                .distinctUntilChanged() // Only if the value has changed

            const searcher = keyup.flatMapLatest(searchWordpress)

            searcher.subscribe(
                (data) => {
                    $results
                        .empty()
                        .append($.map(data, (v) => {
                            const html = [
                                `<a href='${v.slug}'>`,
                                `<img src='${v.featuredImage}' alt='search-image' />`,
                                `<h5>${v.title.rendered}</h5>`,
                                `<span>${v.type}</span>`,
                                '</a>'
                            ].join('\n')
                            return $('<li>').html(html)
                        })).show('slow')
                },
                error => {
                    $results
                        .empty()
                        .append($('<li>'))
                        .text(`Error:${error}`)
                })
        }

        $(main)
    })

    $('.archive-search-form').each(() => {
        // Search Wordpress for a given term
        const searchWordpress = (term, postType) => {
            return $.ajax({
                url: `http://localhost:8000/wp-json/swp_api/search?&s=${term}`,
                dataType: 'json'
            }).promise()
        }

        const main = () => {
            const $input = $(this).find('.archive-search-field')
            const $searchBox = $(this).find('.archive-search-results')
            const $results = $(this).find('.archive-search-results-list')

            const focusin = Rx.Observable.fromEvent($input, 'focusin')
            focusin.subscribe(() => {
                $searchBox.fadeIn()
            })

            const focusout = Rx.Observable.fromEvent($input, 'focusout')
            focusout.subscribe(() => {
                $searchBox.fadeOut()
            })

            // Get all distinct key up events from the input and only fire if long enough and distinct
            const keyup = Rx.Observable.fromEvent($input, 'keyup')
                .map(e => e.target.value)
                .filter(text => {
                    if (text.length === 0) {
                        $searchBox.fadeOut()
                    }
                    return text.length > 2 // Only if the text is longer than 2 characters
                })
                .debounce(750 /* Pause for 750ms */)
                .distinctUntilChanged() // Only if the value has changed

            const searcher = keyup.flatMapLatest(searchWordpress)

            searcher.subscribe(
                data => {
                    $results
                        .empty()
                        .append($.map(data, v => {
                            const html = [
                                `<a href='${v.slug}'>`,
                                `<img src='${v.featuredImage}' alt='search-image' />`,
                                `<h5>${v.title.rendered}</h5>`,
                                `<span>${v.type}</span>`,
                                '</a>'
                            ].join('\n')
                            return $('<li>').html(html)
                        })).show('slow')
                },
                error => {
                    $results
                        .empty()
                        .append($('<li>'))
                        .text(`Error:${error}`)
                })
        }

        $(main)
    })

}

export default initSearch
