# slow-science

Welcome to your new Jekyll theme! In this directory, you'll find the files you need to be able to package up your theme into a gem. Put your layouts in `_layouts`, your includes in `_includes`, your sass files in `_sass` and any other assets in `assets`.

To experiment with this code, add some sample content and run `bundle exec jekyll serve` – this directory is setup just like a Jekyll site!

TODO: Delete this and the text above, and describe your gem


## Installation

Add this line to your Jekyll site's `Gemfile`:

```ruby
gem "slow-science"
```

And add this line to your Jekyll site's `_config.yml`:

```yaml
theme: slow-science
```

And then execute:

    $ bundle

Or install it yourself as:

    $ gem install slow-science

## Usage

## Homepage

Create a file called index.html with the following front matter

```yaml
---
layout: home
---
```

### Front matter options:

```yaml
lang: "language-country"
```
If `page.lang` is null, defaults to site language if declared in `_config.yml`, if `site.lang` = null, defulats to `"en-GB"`

See [list](https://www.w3schools.com/tags/ref_language_codes.asp) of languages.

```yaml
feature: true
```
Use in publication front matter to display the on the featured list on the home page. Limited to 3.

## `_config.yml` options


```yaml
research:
  intro : Long intro to your research. Not displayed on mobile devices.
  detail: Details of your research. Displays on all devices.
```


## Site Data

### Menus

`_data/menu.yml`

```yaml
- name:      Research
  link:      /#research
  menu:      1/2
```

Primary menu is placed the main navbar. Secondary menu items are included along side the primary items in the footer.

### Team members

`_data/team.yml`

```yaml
- name: Made Slowly
  pic: name of image without extension
  position:
  social:
    - icon: fab fa-twitter
      url: https://twitter.com/made_slowly
    - icon: far fa-envelope
      url: mailto:arran@madeslowly.co.uk
    - icon: fas fa-link
      url: https://www.madeslowly.co.uk
```

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/madeslowly/. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant](http://contributor-covenant.org) code of conduct.

## Development

To set up your environment to develop this theme, run `bundle install`.

Your theme is setup just like a normal Jekyll site! To test your theme, run `bundle exec jekyll serve` and open your browser at `http://localhost:4000`. This starts a Jekyll server using your theme. Add pages, documents, data, etc. like normal to test your theme's contents. As you make modifications to your theme and to your content, your site will regenerate and you should see the changes in the browser after a refresh, just like normal.

When your theme is released, only the files in `_layouts`, `_includes`, `_sass` and `assets` tracked with Git will be bundled.
To add a custom directory to your theme-gem, please edit the regexp in `slow-science.gemspec` accordingly.

## License

The theme is available as open source under the terms of the [MIT License](https://opensource.org/licenses/MIT).
