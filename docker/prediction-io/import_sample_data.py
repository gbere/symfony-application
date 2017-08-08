"""
Import sample data for recommendation engine
"""

import predictionio
import argparse

if __name__ == '__main__':
  parser = argparse.ArgumentParser(
    description="Import sample data for recommendation engine")
  parser.add_argument('--access_key', default='invald_access_key')
  parser.add_argument('--url', default="http://localhost:7070")
  parser.add_argument('--file', default="./data/sample-handmade-data.txt")

  args = parser.parse_args()
  print args

  client = predictionio.EventClient(
    access_key=args.access_key,
    url=args.url,
    threads=5,
    qsize=500)

client.create_event(
      event="$set",
      entity_type="user",
      entity_id="example_user"
    )

client.create_event(
      event="$set",
      entity_type="item",
      entity_id="example_item"
    )

client.create_event(
          event="view",
          entity_type="user",
          entity_id="example_user",
          target_entity_type="item",
          target_entity_id="example_item"
        )

client.create_event(
          event="purchase",
          entity_type="user",
          entity_id="example_user",
          target_entity_type="item",
          target_entity_id="example_item"
        )