export interface TableField {
  key: String;
  label?: String;
  headerTitle?: String;
  headerAbbr?: String;
  class?: String | Array<String>;
  formatter?: String | Function;
  sortable?: Boolean;
  sortKey?: String;
  sortDirection?: String;
  sortByFormatted?: Boolean | Function;
  filterByFormatted?: Boolean | Function;
  tdClass?: String | Array<String> | Function;
  thClass?: String | Array<String>;
  thStyle?: Object;
  variant?: String;
  tdAttr?: Object | Function;
  thAttr?: Object | Function;
  isRowHeader?: Boolean;
  stickyColumn?: Boolean;
}
