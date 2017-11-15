<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Vision_GoogleCloudVisionV1Paragraph extends Google_Collection
{
  protected $collection_key = 'words';
  protected $boundingBoxType = 'Google_Service_Vision_GoogleCloudVisionV1BoundingPoly';
  protected $boundingBoxDataType = '';
  protected $propertyType = 'Google_Service_Vision_GoogleCloudVisionV1TextAnnotationTextProperty';
  protected $propertyDataType = '';
  protected $wordsType = 'Google_Service_Vision_GoogleCloudVisionV1Word';
  protected $wordsDataType = 'array';

  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1BoundingPoly
   */
  public function setBoundingBox(Google_Service_Vision_GoogleCloudVisionV1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1BoundingPoly
   */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1TextAnnotationTextProperty
   */
  public function setProperty(Google_Service_Vision_GoogleCloudVisionV1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1TextAnnotationTextProperty
   */
  public function getProperty()
  {
    return $this->property;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1Word
   */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1Word
   */
  public function getWords()
  {
    return $this->words;
  }
}
