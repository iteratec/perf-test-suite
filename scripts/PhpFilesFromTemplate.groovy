import groovy.text.StreamingTemplateEngine
import groovy.json.JsonSlurper

def template = new File('./index.php.template')
def json = new JsonSlurper().parseText(new File('./variants.json').text)

def common = json.common

json.variants.each{variant ->
	def merged = [:]
	common.each{ k,v -> merged[k]=v }
	variant.each{ k,v -> merged[k]=v }
	new File("out/${merged.name}") << new StreamingTemplateEngine().createTemplate(template).make(merged)
}