<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A NewsArticle is an article whose content reports news, or provides background
 * context and supporting materials for understanding the news.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/NewsArticle
 */
class NewsArticle extends Article {
    /**
     * A dateline is a brief piece of text included in news articles that describes
     * where and when the story was written or filed though the date is often omitted.
     * Sometimes only a placename is provided.
     * 
     * Structured representations of dateline-related information can also be expressed
     * more explicitly using locationCreated (which represents where a work was created
     * e.g. where a news report was written).  For location depicted or described in
     * the content, use contentLocation.
     * 
     * Dateline summaries are oriented more towards human readers than towards
     * automated processing, and can vary substantially. Some examples: "BEIRUT,
     * Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from
     * Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
     *
     * @var string
     */
    public $dateline;

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     *
     * @var string
     */
    public $printColumn;

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     * @var string
     */
    public $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page
     * on which the article is found. Please note that this field is intended for the
     * exact page name (e.g. A5, B18).
     *
     * @var string
     */
    public $printPage;

    /**
     * If this NewsArticle appears in print, this field indicates the print section in
     * which the article appeared.
     *
     * @var string
     */
    public $printSection;


}