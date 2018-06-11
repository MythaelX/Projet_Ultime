/*!
*
*	\file		tree.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		07 juin 2018
*
*	\todo		Transform all to do a Tree class
*
*/
#ifndef HEADER_tree
#define HEADER_tree

#include "maths.hpp"

#define RIGHT_NODE 1
#define LEFT_NODE -1
#define NO_NODE 0

typedef long double NodeWeight;

/*!
* \brief A struct to define a node for the tree
*/
template<class T>
struct Node {
	T values;
	NodeWeight weight;

	bool initialized = false;

	Node<T>* left = nullptr;
	Node<T>* right = nullptr;
};

/*!
* \brief	A function to print the node value in cout stream
*		\param[in]		node		The root node of the tree
*		\param[in]		index		The index to know how much point to print before the node value
*
*		\return			void
*/
template<class T>
void printNode(Node<T>* node, long int index = -1){
	for(long int i{0}; i < index; ++i){
		std::cout << " ";
	}

	std::cout << "'" << node->values << "' -> " << node->weight << std::endl;
}

/*!
* \brief	Function to sort a tree depending on weights
*		\param[in]		datas		The datas to compare to
*		\param[in]		nodeDatas	The datas of the node to compare to \a datas
*
*		\return			Return -1/0/1 to say which node to go
*/
template<class T>
short sorter(std::pair<T, NodeWeight> datas, std::pair<T, NodeWeight> nodeDatas){
	auto w1 = datas.second;
	auto w2 = nodeDatas.second;

	if(w1 < w2){
		return LEFT_NODE;
	} else if(w1 > w2){
		return RIGHT_NODE;
	} else {
		return NO_NODE;
	}
}

/*!
* \brief	Return an array format for the tree
*		\param[in]		in		The value to convert
*
*		\return			Return \a in converted for the tree
*/
template<class T, class U>
std::vector<std::pair<T, NodeWeight>> convertInTreeValues(std::vector<std::pair<T, U>> in){
	std::vector<std::pair<T, NodeWeight>> out;

	for(auto vals : in){
		T value = vals.first;
		NodeWeight weight = static_cast<NodeWeight>(vals.second);

		out.push_back(std::make_pair(value, weight));
	}

	return out;
}

/*!
* \brief	Create a child for the tree
*		\param[in]		values		The value for the child
*		\param[in]		weight		The weight for the child
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* createChild(T values, NodeWeight weight){
	Node<T>* child = new Node<T>;

	child->values = values;
	child->weight = weight;
	child->initialized = true;

	return child;
}

/*!
* \brief	Insert datas in the tree
*		\param[in]		datas		The datas for the new node
*		\param[in]		node		The node where to insert
*		\param[in]		comparator	The function to sort the new node
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* insert(std::pair<T, NodeWeight> datas, Node<T>* node, short(*comparator)(std::pair<T, NodeWeight>, std::pair<T, NodeWeight>)){
	Node<T>* root = node;
	bool created{false};

	T values = datas.first;
	NodeWeight weight = datas.second;

	if(!root->initialized){
		root->values = values;
		root->weight = weight;
		root->initialized = true;

		return root;
	}

	while(!created){
		if(comparator(datas, std::make_pair(values, weight)) < 0){
			if(node->left == nullptr){
				node->left = createChild(values, weight);
				created = true;
			} else {
				node = node->left;
			}
		} else if(comparator(datas, std::make_pair(values, weight)) > 0){
			if(node->right == nullptr){
				node->right = createChild(values, weight);
				created = true;
			} else {
				node = node->right;
			}
		} else {
			created = true;
		}
	}

	return root;
}

/*!
* \brief	Create a binary tree with a custom sort function
*		\param[in]		datas		All the datas for the tree
*		\param[in]		comparator	The compare function to sort the datas
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* createBinaryTree(std::vector<std::pair<T, NodeWeight>> datas, short(*comparator)(std::pair<T, NodeWeight>, std::pair<T, NodeWeight>)){
	Node<T>* root = new Node<T>;

	for(auto data : datas){
		root = insert(data, root, comparator);
	}

	return root;
}

/*!
* \brief	Create a binary tree with default sorter function
*		\param[in]		datas		All the datas for the tree
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* createBinaryTree(std::vector<std::pair<T, NodeWeight>> datas){
	return createBinaryTree(datas, sorter);
}

/*!
* \brief	Copy datas from a node to another
*		\param[in]		nodeSource		The node to get the datas
*		\param[in]		nodeCopy		The node where to copy the datas
*
*		\return			void
*/
template<class T>
void copyData(Node<T>* nodeSource, Node<T>* nodeCopy){
	T values = nodeSource->values;
	NodeWeight weight = nodeSource->weight;

	nodeSource->values = nodeCopy->values;
	nodeSource->weight = nodeCopy->weight;

	nodeCopy->values = values;
	nodeCopy->weight = weight;
}

/*!
* \brief	Return the height of the tree
*		\param[in]		root		The root node of the tree
*
*		\return			Return the height of the tree
*/
template<class T>
int treeHeight(Node<T>* root){
	if(root == nullptr){
		return 0;
	}

	int heightL = treeHeight(root->left);
	int heightR = treeHeight(root->right);

	return (heightL > heightR)?heightL+1:heightR+1;
}

/*!
* \brief	Read the tree from left then root to right
*		\param[in]		node		The root node of the tree
*		\param[in]		func		The function to do something on each node
*		\param[in]		index		The index to let know the number of GRD call
*
*		\return			void
*/
template<class T>
void GRD(Node<T>* node, void(*func)(Node<T>*, long int), long int index = -1){
	if(node != nullptr){
		if(index >= 0){
			GRD(node->left, func, index+1);
		} else {
			GRD(node->left, func, index);
		}

		func(node, index);

		if(index >= 0){
			GRD(node->right, func, index+1);
		} else {
			GRD(node->right, func, index);
		}
	}
}

/*!
* \brief	Print the tree
*		\param[in]		node		The root node of the tree
*
*		\return			void
*/
template<class T>
void printTree(Node<T>* node){
	GRD(node, &printNode, 0);
}

/*!
* \brief	Balance right the tree
*		\param[in]		root		The root node of the tree
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* rightBalance(Node<T>* root){
	root = createRightVine(root);

	return rightBalanceVine(root, getRightNodeCount(root));
}

/*!
* \brief	Balance left the tree
*		\param[in]		root		The root node of the tree
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* leftBalance(Node<T>* root){
	root = createLeftVine(root);

	return leftBalanceVine(root, getLeftNodeCount(root));
}

/*!
* \brief	Rotate the branch to the left
*		\param[in]		tree		The root node of the tree
*		\param[in]		func		The compare function to sort the rotation of the tree
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* leftRotate(Node<T>* tree, void(*func)(Node<T>*, Node<T>*)){
	if(tree->right != nullptr){
		Node<T>* right = tree->right;

		tree->right = right->right;

		right->right = right->left;
		right->left = tree->left;

		tree->left = right;

		func(tree, right);
	}

	return tree;
}

/*!
* \brief	Rotate the branch to the right
*		\param[in]		tree		The root node of the tree
*		\param[in]		func		The compare function to sort the rotation of the tree
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* rightRotate(Node<T>* tree, void(*func)(Node<T>*, Node<T>*)){
	if(tree->left != nullptr){
		Node<T>* left = tree->left;

		tree->left = left->left;

		left->left = left->right;
		left->right = tree->right;

		tree->right = left;

		func(tree, left);
	}

	return tree;
}

/*!
* \brief	
*		\param[in]		tree		The root node of the tree
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* createRightVine(Node<T>* tree){
	while(tree->left != nullptr){
		tree = rightRotate(tree, &copyData);
	}

	if(tree->right != nullptr){
		tree->right = createRightVine(tree->right);
	}

	return tree;
}

/*!
* \brief	
*		\param[in]		tree		The root node of the tree
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* createLeftVine(Node<T>* tree){
	while(tree->right != nullptr){
		tree = leftRotate(tree, &copyData);
	}

	if(tree->left != nullptr){
		tree->left = createLeftVine(tree->left);
	}

	return tree;
}

/*!
* \brief	Get the depth on right
*		\param[in]		tree		The root node of the tree
*
*		\return			Return the number of nodes on the right
*/
template<class T>
int getRightNodeCount(Node<T>* tree){
	if(tree == nullptr){
		return 0;
	}

	int i{1};

	while(tree->right != nullptr){
		tree = tree->right;
		i++;
	}

	return i;
}

/*!
* \brief	Get the depth on left
*		\param[in]		tree		The root node of the tree
*
*		\return			Return the number of nodes on the left
*/
template<class T>
int getLeftNodeCount(Node<T>* tree){
	if(tree == nullptr){
		return 0;
	}

	int i{1};

	while(tree->left != nullptr){
		tree = tree->left;
		i++;
	}

	return i;
}

/*!
* \brief	
*		\param[in]		tree		The root node of the tree
*		\param[in]		nodeCount	The number of nodes
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* rightBalanceVine(Node<T>* tree, int nodeCount){
	int times = static_cast<int>(log2(nodeCount));
	Node<T>* newTree = tree;

	for(int i{0}; i < times; i++){
		newTree = leftRotate(newTree, &copyData);
		tree = newTree->right;

		for(int j{0}; j < (nodeCount/2 - 1); j++){
			tree = leftRotate(tree, &copyData);
			tree = tree->right;
		}

		nodeCount = nodeCount >> 1;
	}

	return newTree;
}

/*!
* \brief	
*		\param[in]		tree		The root node of the tree
*		\param[in]		nodeCount	The number of nodes
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* leftBalanceVine(Node<T>* tree, int nodeCount){
	int times = static_cast<int>(log2(nodeCount));
	Node<T>* newTree = tree;

	for(int i{0}; i < times; i++){
		newTree = rightRotate(newTree, &copyData);
		tree = newTree->left;

		for(int j{0}; j < (nodeCount/2 - 1); j++){
			tree = rightRotate(tree, &copyData);
			tree = tree->left;
		}

		nodeCount = nodeCount >> 1;
	}

	return newTree;
}

/*!
* \brief	Find a value in the tree and return the right node
*		\param[in]		value		The value to find
*		\param[in]		node		The root node of the tree
*		\param[in,out]	path		The path to the value in the tree
*
*		\return			Return a pointer to the node after treatment
*/
template<class T>
Node<T>* finder(T value, Node<T>* node, std::string& path){
	if(node->values == value){
		return node;
	}

	if(node->left == nullptr && node->right == nullptr){
		return nullptr;
	}

	Node<T>* root;

	if(node->left != nullptr){
		if((root = finder(value, node->left, path)) != nullptr){
			path += "0";
			return root;
		}
	}
	if(node->right != nullptr){
		if((root = finder(value, node->right, path)) != nullptr){
			path += "1";
			return root;
		}
	}

	return nullptr;
}

/*!
* \brief	Find a value in the tree and return the node and the path to the node
*		\param[in]		value		The value to find in the tree
*		\param[in]		root		The root node of the tree
*
*		\return			Return the node and the path to this node from the root
*/
template<class T>
std::pair<Node<T>*, std::string> find(T value, Node<T>* root){
	if(!root->initialized){
		return std::make_pair(root, "");
	}

	std::string path{""};

	auto node = finder(value, root, path);

	return std::make_pair(node, path);
}

/*!
* \brief	Free the differents nodes of the tree with a function for the node
*		\param[in]		root		The root node of the tree
*		\param[in]		func		The function to apply to each nodes
*
*		\return			void
*/
template<class T>
void freeTree(Node<T>* root, void(*func)(Node<T>*)){
	if(root != nullptr){
		freeTree(root->right, func);
		freeTree(root->left, func);

		func(root);
		delete root;
	}
}

/*!
* \brief	Free the tree and the differents nodes
*		\param[in]		root		The root node of the tree
*
*		\return			void
*/
template<class T>
void freeTree(Node<T>* root){
	if(root != nullptr){
		freeTree(root->right);
		freeTree(root->left);

		delete root;
	}
}

#endif //HEADER_tree
