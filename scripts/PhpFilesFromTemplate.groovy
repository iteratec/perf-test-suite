import groovy.text.StreamingTemplateEngine
import groovy.json.JsonSlurper

def processInnerAttributes = {Map variantAttributes, def json ->
	json.superAttributes.each{ superKey,innerKeys ->
		// println "superKey=$superKey"
		// println "innerKeys=$innerKeys"
		def mapForInnerTemplating = [:]
		innerKeys.each{innerKey ->
			mapForInnerTemplating[innerKey] = variantAttributes[innerKey]
		}
		// println "mapForInnerTemplating=$mapForInnerTemplating"
		def value = new StreamingTemplateEngine().createTemplate(variantAttributes[superKey]).make(mapForInnerTemplating)
		// println "to use as value for key '${superKey}' for inner templating =${value}"
		variantAttributes[superKey] = value
	}
}

def template = new File('./index.php.template')
def json = new JsonSlurper().parseText(new File('./variants.json').text)

def common = json.common

json.variants.each{variant ->
	Map merged = [:]
	common.each{ k,v -> merged[k]=v }
	variant.each{ k,v -> merged[k]=v }
	processInnerAttributes(merged, json)
	new File("out/${merged.name}") << new StreamingTemplateEngine().createTemplate(template).make(merged)
}