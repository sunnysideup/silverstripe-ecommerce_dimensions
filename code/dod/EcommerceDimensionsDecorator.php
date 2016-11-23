<?php


class EcommerceDimensionsDecorator extends DataObjectDecorator
{
    public function extraStatics()
    {
        return array(
            "has_many" => array(
                "EcommerceDimensions" => "EcommerceDimension"
            )
        );
    }

    public function updateCMSFields(&$fields)
    {
        $fields->addFieldToTab(
            "Root.Content.Dimensions",
            new HasManyComplexTableField(
                $controller = $this->owner,
                $name = "EcommerceDimensions",
                $sourceClass = "EcommerceDimension",
                $fieldList = null,
                $detailFormFields = null,
                $sourceFilter = "ProductID = ".$this->owner->ID,
                $sourceSort = "",
                $sourceJoin = ""
            )
        );
    }
}
