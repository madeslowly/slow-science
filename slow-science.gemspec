# coding: utf-8
# frozen_string_literal: true
# mygem.gemspec

require_relative "version.rb"

Gem::Specification.new do |spec|

  spec.name          = 'slow-science'
  spec.version       = Mygem::VERSION
  spec.authors       = ['Arran Curran']
  spec.email         = ['arran@madeslowly.co.uk']

  spec.summary       = %q{Jekyll theme designed for scientists, by a scientist.}
  spec.homepage      = 'https://github.com/madeslowly/slow-science'
  spec.license       = 'MIT'

  spec.metadata['plugin_type'] = 'theme'

  spec.files         = `git ls-files -z`.split('\x0').select { |f| f.match(%r!^(assets|_layouts|_includes|_sass|LICENSE|README)!i) }

  spec.add_runtime_dependency 'jekyll', '~> 4.0'

  spec.add_runtime_dependency 'jekyll-feed', '~> 0.15.0'
  spec.add_runtime_dependency 'jekyll-paginate', '~> 1.1.0'
  spec.add_runtime_dependency 'jekyll-autoprefixer', '~> 1.0.2'
  spec.add_runtime_dependency 'jekyll-sitemap', '~> 1.4.0'
  spec.add_runtime_dependency 'jekyll-target-blank', '~> 2.0.0'
  spec.add_runtime_dependency 'jekyll-sass-converter', '~> 2.1.0'

end
